import { defineConfig, globalIgnores } from "eslint/config";
import nextVitals from "eslint-config-next/core-web-vitals";
import nextTs from "eslint-config-next/typescript";

export default defineConfig([
  ...nextVitals,
  ...nextTs,
  // This repository has no pages or app directory, only components and blocks.
  { rules: { "@next/next/no-html-link-for-pages": "off" } },
  globalIgnores(["node_modules/**", "public/**"]),
]);
