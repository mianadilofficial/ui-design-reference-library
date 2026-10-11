import opentype from 'opentype.js';
import { mkdirSync } from 'fs';

process.chdir(import.meta.dir);

const FONT_URL = 'https://fonts.gstatic.com/s/caudex/v19/esDT311QOP6BJUrwdteUkp8G.ttf';
const TMP_DIR = '.tmp';
const FONT_PATH = `${TMP_DIR}/caudex-bold.ttf`;

// Ensure .tmp directory exists and download font if needed
mkdirSync(TMP_DIR, { recursive: true });
const fontFile = Bun.file(FONT_PATH);
if (!(await fontFile.exists())) {
  console.log('Downloading Caudex Bold...');
  const res = await fetch(FONT_URL);
  await Bun.write(FONT_PATH, res);
}

const font = opentype.loadSync(FONT_PATH);
const text = 'Conduit';
const fontSize = 48;

const path = font.getPath(text, 0, 0, fontSize);
const bb = path.getBoundingBox();

const padding = 2;
const x = bb.x1 - padding;
const y = bb.y1 - padding;
const width = bb.x2 - bb.x1 + padding * 2;
const height = bb.y2 - bb.y1 + padding * 2;

const svg = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="${x} ${y} ${width} ${height}" fill="#222">
  ${path.toSVG(2)}
</svg>`;

const outPath = 'conduit-logo.svg';
await Bun.write(outPath, svg);
console.log(`Written to ${outPath} (${width.toFixed(1)} x ${height.toFixed(1)})`);
