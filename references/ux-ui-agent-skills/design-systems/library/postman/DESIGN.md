---
version: alpha
name: Postman
category: "Developer Tools & IDEs"
description: "Postman runs a warm-black #0e0704 developer page: gtStandard 56.32px/500 headlines in cream #fff0de, Inter 19px/30.4px body in #cdbfad, IBM Plex Mono labels and code, a #e0531f orange 5px-radius Sign Up button hovering to #ff6c37, pill chips with #ffe0c424 hairlines, 10-12px-radius cards and glowing orange-violet gradients."
colors:
  canvas: "#0e0704"
  page-body: "#ffffff"
  ink: "#cdbfad"
  primary: "#e0531f"
  on-primary: "#ffffff"
  surface-plum-black: "#100218"
  surface-card: "#17100a"
  ink-strong: "#fff0de"
  ink-dark: "#212121"
  ink-cream-90: "#ffe0c4e6"
  ink-cream-92: "#ffe0c4eb"
  hairline: "#ffe0c424"
  primary-hover: "#ff6c37"
  button-secondary-bg: "#120a06b8"
  button-secondary-text: "#ffe0c4d9"
  button-secondary-border: "#ffe0c429"
  icon-button-bg: "#0a0503"
  card-border: "#2a2018"
  footer-border: "#ffe0c41a"
  accent-orange-light: "#ff8e64"
  ink-dim: "#8a8178"
typography:
  display:
    fontFamily: gtStandard, "gtStandard Fallback", inter, "inter Fallback", sans-serif
    fontSize: 56.32px
    fontWeight: 500
    lineHeight: 57.4464px
    letterSpacing: "-1.1264px"
  display-mobile:
    fontFamily: gtStandard, "gtStandard Fallback", inter, "inter Fallback", sans-serif
    fontSize: 58px
    fontWeight: 500
    lineHeight: 59.16px
    letterSpacing: "-1.16px"
  heading:
    fontFamily: gtStandard, "gtStandard Fallback", inter, "inter Fallback", sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 43.88px
    letterSpacing: "-0.72px"
  subheading:
    fontFamily: ibmPlexMono, "ibmPlexMono Fallback", monospace
    fontSize: 15px
    fontWeight: 500
    lineHeight: 21px
  body:
    fontFamily: >-
      inter, "inter Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", Oxygen, Ubuntu, Cantarell,
      "Fira Sans", "Droid Sans", Helvetica, Arial, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 30.4px
    letterSpacing: "-0.16px"
  button:
    fontFamily: >-
      inter, "inter Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", Oxygen, Ubuntu, Cantarell,
      "Fira Sans", "Droid Sans", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 24.5px
    letterSpacing: "-0.16px"
  icon-label:
    fontFamily: system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
    letterSpacing: "-0.16px"
  link:
    fontFamily: >-
      inter, "inter Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, メイリオ, Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", Oxygen, Ubuntu, Cantarell,
      "Fira Sans", "Droid Sans", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
    letterSpacing: "-0.16px"
  button-secondary:
    fontFamily: ibmPlexMono, "ibmPlexMono Fallback", monospace
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
    letterSpacing: "-0.16px"
rounded:
  xs: 4px
  sm: 4.5px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 10px
  3xl: 12px
  4xl: 15px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    height: 33px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 10px 14px 10px 18px
    height: 38px
    borderColor: "{colors.button-secondary-border}"
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    border: "1px solid #cdbfad"
    padding: 4px 12px
    height: 35px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
  icon-button:
    backgroundColor: "{colors.icon-button-bg}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.icon-label}"
    rounded: "{rounded.pill}"
    padding: 11px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.2xl}"
    padding: 20px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.2) 0px 2px 8px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    padding: 60px 0px
    borderColor: "{colors.footer-border}"
---

# Postman

## Overview

Postman's home page (title "API engineering for your agents") is a dark, warm, developer-first page. The canvas is #0e0704 — a black with a brown cast — and nearly all text is cream rather than white. The header is a compact row: the orange Postman logo, Product, Solutions, Pricing, Enterprise and Resources menus, a search icon, then "Contact Sales" (outlined), "Sign In" and a small orange "Sign Up for Free" button.

The hero is left-aligned on a deep red-orange glow: "API engineering for your agents" with the word "engineering" set in #ff6c37 orange, a two-line subtitle ("Go faster from development to production with higher accuracy and fewer tokens."), and a terminal-style install bar (`npm install -g postman-cli` with a package-manager selector and copy button) plus a small mono caption "INSTALL FOR YOUR AGENTS" and OS download icons. Below it a large product window sits on a rainbow-edged glow (orange, magenta, violet, green), followed by a logo strip (AWS, Cover Genius, Mercedes-Benz, Intuit, PayPal, HubSpot).

The body is a sequence of dark sections with cream headings: "Equip your agents with pre-built skills" (a grid of six mono-titled skill cards — api-discovery, api-testing, api-mocking, api-monitoring, ci-integration, performance-testing — and a prompt list), "Stop guessing what your APIs do" (a Context Graph report card with orange bar charts next to a particle-network visualization), "Secure by design with Passport" (a flow diagram: Caller → Secure Access Proxy → API, with a secret store), "Postman Agent Stack" (four product cards including Fabric, Fern and Passport), "Postman Enterprise: the AI-native API platform" with a dashboard screenshot, "Trusted by over 50 million developers and 500,000 companies" with a logo strip, a repeated install bar, and a footer with the Postmanaut logo and five link columns.

The copy is technical and direct ("Drop the Postman CLI into your coding agent"), with commands shown inline as code chips.

Note: the capture shows the site's privacy-settings consent dialog over the hero; it is a consent overlay, not brand UI, and is not documented here.

## Colors

- **Canvas #0e0704** — the page background (6,895 area units; 43% of the captured screen). **Page-body #ffffff** is the body element's own background, hidden under the dark sections.
- **Ink #cdbfad** — the most-read text (3,170 characters): paragraphs and links, a warm grey-beige.
- **Ink-strong #fff0de** — headings and nav text, a cream (726 characters).
- **Ink-cream-90 #ffe0c4e6 / ink-cream-92 #ffe0c4eb** — translucent cream variants for secondary text; **button-secondary-text #ffe0c4d9** for chip labels; **ink-dim #8a8178** for the faintest captions.
- **Primary #e0531f** — the "Sign Up for Free" fill; **primary-hover #ff6c37** — the same button on hover, and the color of the highlighted headline word (708 units of background, e.g. bar charts).
- **Accent-orange-light #ff8e64** — orange text accents (143 characters).
- **On-primary #ffffff**.
- **Surface-plum-black #100218** — the second largest dark area (1,446 units), the violet-black glow regions.
- **Surface-card #17100a** with **card-border #2a2018** — opaque dark cards.
- **Hairline #ffe0c424** — the standard 1px border (cream at 14%), **button-secondary-border #ffe0c429**, **footer-border #ffe0c41a**.
- **Button-secondary-bg #120a06b8** — translucent chip fill; **icon-button-bg #0a0503** — round icon buttons.
- **Ink-dark #212121** — dark text measured inside a light dropdown card.

The visualizations use their own category palette (CSS variables such as `--demo-cg-team #7a5af0`, `--demo-cg-external #3970e4`, `--demo-cg-database #e0409f`), measured accents #50a3fe, #a58afa and #0bbd81 — content colors, not UI.

## Typography

Loaded fonts: **gtStandard** (variable 100–500), **Inter** (400, 600) and **IBM Plex Mono** (400, 500, 600).

- **Display** — gtStandard 56.32px/57.45px, weight 500, -1.1264px (-0.02em).
- **Heading** — gtStandard 36px/43.88px, 500, -0.72px. A 26.88px size at -0.2688px is also used (60 characters).
- **Subheading** — IBM Plex Mono 15px/21px, 500 (skill card titles such as "api-discovery").
- **Body** — Inter 19px/30.4px, 400, -0.16px.
- **Button** — Inter 14px/24.5px, 600, -0.16px.
- **Button-secondary** — IBM Plex Mono 14px/16.1px, 400 (agent chips such as "Claude Code").
- **Link** — Inter 16px/18.4px, 400. **Icon-label** — system-ui 16px for round icon buttons.

A tracking of -0.16px is applied to almost every Inter size; mono eyebrow labels use wide positive tracking (12px at +1.68px, 11px at +1.1px) in uppercase. Postman's 2022 press brand guidelines (in the media kit) specify Degular Display Semibold for H1/H2, Inter for H4–H6 and body, IBM Plex Mono for code, and Dosis for the logo wordmark; the live site measured here has replaced Degular with gtStandard at weight 500 while keeping Inter and IBM Plex Mono.

## Layout

Measured at 1280px. Content spans x=80 to x=1252 in the hero band and x=40 to x=1240 in the main sections, with up to 4 columns (the Agent Stack and Passport steps) and 3 columns for skills. The hero text column ends at x=720. The footer runs 6 columns from x=48 to x=1232.

Gaps: 8px (148 times), 10px, 6px, 12px, 20px, 4px, 24px, 16px, 18px, 14px, 40px, 56px. Paddings: 10px (133 times), 5px, 20px, 24px, 22px, 15px, 11px, 18px, 96px (section padding), 8px. The footer uses 60px 0px. The page is 6,939px tall. Section edges are drawn with thin hairlines and corner marks, giving a blueprint-like frame around each block.

## Elevation & Depth

Depth is glow-driven. Cards carry a soft `rgba(0, 0, 0, 0.2) 0px 2px 8px 0px` (6 elements). Four elements use a warm halo `rgba(255, 180, 115, 0.22) 0px 0px 22px 0px` with a matching inset glow; one uses a violet `rgb(179, 135, 245) 0px 4px 24px 0px`; one a deep `rgba(14, 7, 4, 0.5) 0px 16px 40px 0px` with a 1px cream inner highlight. Large radial gradients (red-orange behind the hero, a rainbow ring around the product window, violet behind the closing install bar) supply the atmosphere. Focus is a 2px solid orange outline (#e0531f or #ff6c37) at 2px offset.

## Shapes

Radii: 5px dominates (72 elements — buttons, inputs, small controls), 12px (skill cards), 10px (opaque cards), 999px/9999px pills (chips and icon buttons), 50% circles, and half-pills (0 999px 999px 0) for joined segmented controls. Lines are 1px translucent cream. Diagrams use small rectangles connected by thin lines with mono labels.

## Components

- **Primary button** — #e0531f fill, white Inter 14px/600, 5px radius, 33px tall, 4px 12px padding ("Sign Up for Free"); hover #ff6c37 with a white border.
- **Outlined button** — transparent, `1px solid #cdbfad`, #cdbfad label, 5px radius, 35px tall ("Contact Sales"); hover adds 10% white fill and turns the text and border #fff0de.
- **Agent chip** — #120a06b8 fill, IBM Plex Mono 14px, 999px radius, 38px tall, 10px 14px 10px 18px padding, #ffe0c429 border ("Claude Code").
- **Icon button** — 44px circle, #0a0503 fill, #ffe0c424 border, 11px padding.
- **Install bar** — dark field with a package-manager selector, a mono command and a copy icon.
- **Skill card** — translucent dark fill, 12px radius, 24px padding, #ffe0c424 border, mono title and short Inter text.
- **Product card** — #17100a, 10px radius, 20px padding, #2a2018 border, soft shadow.
- **Header nav** — cream links that turn #ffffff on hover.
- **Footer** — #0e0704 with a 1px #ffe0c41a border, Inter 16px/600 column titles at +0.48px tracking, the stacked Postmanaut logo.

## Design System Architecture

Postman's press page (https://www.postman.com/company/press-media/) provides horizontal and stacked orange logo SVGs, the rule "Please do not edit, change, distort, recolor, or alter our logo in any way", and a media kit (https://voyager.postman.com/media-kit/postman-press-and-media-kit.zip). The kit's "Postman-Press and Media Brand Guidelines.pdf" explains the logo (the "Postmanaut" space hero), web sizing (max 500–1000px, min 250px, icon only below 250px), clear space equal to the width of the "M" in Postman, positioning in a corner or on the vertical axis, and the type system: Dosis (logo), Degular Display Semibold (H1, H2), Inter (H4–H6, body) and IBM Plex Mono (code). No color values appear in its text. No public component library was found. The shipped CSS is a Tailwind build (`--tw-*`, `--container-md: 28rem`, `--color-orange-600` in lab() color space) with project tokens such as `--grey-15 #f8f9fa`, `--grey-90 #212121`, `--orange-80 #a12700`, `--yellow-30 #ffe47e`, `--card_shadow_2`, and demo/visualization tokens (`--demo-*`, `--monaco-*`). Breakpoints cluster at 992px, 768px, 1024px, 900px and 576px.

## Do's and Don'ts

**Do**
- Use the warm #0e0704 canvas with cream #fff0de headings and #cdbfad body text — never pure white body text.
- Set headlines in gtStandard 500 at -0.02em; body in Inter with -0.16px; code and labels in IBM Plex Mono.
- Keep the orange action small and sharp: #e0531f, 5px radius, hover #ff6c37.
- Draw everything with 1px cream hairlines at 10–16% alpha.
- Show commands as real, copyable code.
- Follow the media-kit logo rules: no recoloring or distortion, min 250px for the full logo.

**Don't**
- Don't use cool greys; every neutral on the page is warm.
- Don't use large rounded buttons for the main action; pills are for chips.
- Don't style the consent dialog as part of the brand.
- Don't use heavy drop shadows; use glows and gradients.
- Don't use the logo below 250px wide — switch to the icon.

## Responsive Behavior

Measured at a 390px viewport: the h1 changes from 56.32px to 58px/59.16px with -1.16px tracking (it wraps to more lines at 350px wide), and the h2 drops from 36px to 26px/33.08px with -0.52px. Body drops from 19px/30.4px to 17px/27.2px. The primary button keeps 33px height and 4px 12px padding. The header shows 4 visible links and a visible "Toggle navigation menu" control, as recorded by the mobile pass. Content runs from x=20 to x=370 in 1–2 columns; the mobile page is about 10,400px tall versus 6,939px on desktop. Other mobile behaviour was not measured.

## Iteration Guide

1. #0e0704 canvas, #cdbfad Inter 19px/30.4px body, #fff0de gtStandard 500 headings.
2. Highlight one headline word in #ff6c37.
3. Put a mono install bar in the hero and repeat it at the end.
4. Build cards with 1px #ffe0c424 borders, 10–12px radius and mono titles.
5. Use the small #e0531f 5px-radius button for sign-up and outlined #cdbfad for sales.
6. Add warm radial glows and a rainbow-edged product window for depth.
7. Re-run the gate after edits.
