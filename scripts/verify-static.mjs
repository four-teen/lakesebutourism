import { access, readFile, readdir } from 'node:fs/promises';
import path from 'node:path';

const root = process.cwd();
const requiredFiles = [
  'index.html',
  'api/chat.js',
  'assets/img/logo/logo.png',
  'establishment/camp-lake-view-resort/index.html'
];

for (const file of requiredFiles) {
  await access(path.join(root, file));
}

const indexHtml = await readFile(path.join(root, 'index.html'), 'utf8');
const staleReferences = [
  'api/chat_proxy.php',
  'establishment.php?slug=',
  'href="index.php',
  "href='index.php"
].filter((needle) => indexHtml.includes(needle));

if (staleReferences.length) {
  throw new Error(`Static build still has PHP references: ${staleReferences.join(', ')}`);
}

const establishmentRoot = path.join(root, 'establishment');
const slugs = await readdir(establishmentRoot);

if (slugs.length < 20) {
  throw new Error(`Expected establishment pages to be generated, found only ${slugs.length}.`);
}

console.log(`Static Vercel checks passed for ${slugs.length} establishment pages.`);
