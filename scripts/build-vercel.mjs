import { access, cp, mkdir, rm } from 'node:fs/promises';
import path from 'node:path';

const root = process.cwd();
const dist = path.join(root, 'dist');

const staticEntries = [
  'assets',
  'establishment',
  'index.html'
];

const requiredSourceFiles = [
  'api/chat.js'
];

await rm(dist, { recursive: true, force: true });
await mkdir(dist, { recursive: true });

for (const file of requiredSourceFiles) {
  await access(path.join(root, file));
}

for (const entry of staticEntries) {
  await cp(path.join(root, entry), path.join(dist, entry), { recursive: true });
}

console.log('Prepared Vercel static output in dist/.');
