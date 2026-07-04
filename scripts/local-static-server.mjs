import { createServer } from 'node:http';
import { createReadStream, existsSync, statSync, readFileSync } from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import chatHandler from '../api/chat.js';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const root = path.resolve(__dirname, '..');
const port = Number(process.env.PORT || 3000);
const mimeTypes = new Map([
  ['.css', 'text/css; charset=utf-8'],
  ['.gif', 'image/gif'],
  ['.html', 'text/html; charset=utf-8'],
  ['.jpg', 'image/jpeg'],
  ['.jpeg', 'image/jpeg'],
  ['.js', 'text/javascript; charset=utf-8'],
  ['.json', 'application/json; charset=utf-8'],
  ['.png', 'image/png'],
  ['.svg', 'image/svg+xml']
]);

function loadDotEnv() {
  const envPath = path.join(root, '.env');

  if (!existsSync(envPath)) {
    return;
  }

  const lines = readFileSync(envPath, 'utf8').split(/\r?\n/);

  lines.forEach((line) => {
    const trimmed = line.trim();

    if (!trimmed || trimmed.startsWith('#') || !trimmed.includes('=')) {
      return;
    }

    const [key, ...rest] = trimmed.split('=');
    const value = rest.join('=').trim().replace(/^['"]|['"]$/g, '');

    if (key && process.env[key] === undefined) {
      process.env[key] = value;
    }
  });
}

function resolveStaticPath(urlPath) {
  let pathname = decodeURIComponent(urlPath.split('?')[0]);

  if (pathname === '/') {
    pathname = '/index.html';
  } else if (pathname.endsWith('/')) {
    pathname += 'index.html';
  } else {
    const directoryIndex = path.join(root, pathname, 'index.html');

    if (existsSync(directoryIndex)) {
      pathname += '/index.html';
    }
  }

  const filePath = path.normalize(path.join(root, pathname));

  if (!filePath.startsWith(root)) {
    return null;
  }

  return filePath;
}

loadDotEnv();

const server = createServer((req, res) => {
  if (req.url === '/api/chat' || req.url === '/api/chat/') {
    chatHandler(req, res);
    return;
  }

  const filePath = resolveStaticPath(req.url || '/');

  if (!filePath || !existsSync(filePath) || !statSync(filePath).isFile()) {
    res.statusCode = 404;
    res.setHeader('Content-Type', 'text/plain; charset=utf-8');
    res.end('Not found');
    return;
  }

  const ext = path.extname(filePath).toLowerCase();
  res.statusCode = 200;
  res.setHeader('Content-Type', mimeTypes.get(ext) || 'application/octet-stream');
  createReadStream(filePath).pipe(res);
});

server.listen(port, () => {
  console.log(`Lake Sebu static site running at http://localhost:${port}`);
});
