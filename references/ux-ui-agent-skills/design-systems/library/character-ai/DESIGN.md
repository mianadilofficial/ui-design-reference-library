---
version: alpha
name: Character.AI
category: "AI"
description: "Character.AI logged-out landing page: #f4f4f5 canvas, near-black #131316 buttons with 12px and 30px radii, atHauss type at 36px/600 with -0.72px tracking, a 24px-radius sign-in card over a 32px-radius illustrated hero image, and grey G-scale tokens."
colors:
  canvas: "#f4f4f5"
  page-largest: "#fafafa"
  ink: "#585962"
  ink-strong: "#26272b"
  ink-body: "#1f2937"
  primary: "#131316"
  on-primary: "#fafafa"
  button-dark: "#202024"
  hairline: "#d9d9df"
  surface-chip: "#e4e4e7"
  hover-fill: "#ececee"
  border-gray: "#6b7280"
  brand-blue: "#195eff"
  link-blue: "#3e87f3"
  brand-lilac: "#e5dfeb"
typography:
  display:
    fontFamily: atHauss, ui-sans-serif, system-ui, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: "-0.72px"
  body:
    fontFamily: atHauss, ui-sans-serif, system-ui, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: atHauss, ui-sans-serif, system-ui, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: atHauss, ui-sans-serif, system-ui, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 12px
  sm: 24px
  md: 30px
  lg: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 22px
  s7: 24px
  s8: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 50px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 50px
  button-header:
    backgroundColor: "{colors.button-dark}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 40px
  button-outline:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 40px
  button-outline-hover:
    backgroundColor: "{colors.hover-fill}"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
    padding: 4px 0px 0px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px 16px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    padding: 24px 20px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px
---

## Overview

Character.AI (`https://character.ai/`, title "character.ai | AI Chat, Reimagined–Your Words. Your World.") shows logged-out visitors a single-viewport sign-in page (904px tall at 1280px width), not a marketing site. The composition in the capture is: a light header with the wordmark "(character.ai)" set in lowercase parentheses at the left and two pill buttons at the right ("Sign Up to Chat" in near-black, "Login" outlined); below, a large rounded illustration (a painterly, anime-style view over a ruined, vine-covered city with a figure in a red hood seen from behind) that occupies most of the width; and over its left edge a white sign-in card headed "Get access to 10M+ Characters" with the subline "Sign up in just ten seconds". Under the image is a centered link row (About, Careers, Safety Center, Blog) and a smaller policy row (Cookie Policy, Privacy Policy, Terms of Service, Charms Terms of Use). A small round "?" help button floats at the bottom right.

The page is deliberately quiet: neutral grays, one dark action color, no brand chroma in the interface. The imagery carries all of the color and mood (warm green and amber light), and the interface frames it with generous radii. The tone of the copy is plain and promise-led ("Your Words. Your World.", "10M+ Characters", "just ten seconds"). The measurement was taken of the logged-out page only, so the chat interface, character directory and pricing surfaces are not documented here.

## Colors

The palette is the site's own grey scale, exposed as `--G*` variables on `:root`, plus a few declared accents.

- **Canvas `#f4f4f5`** (`--G100`, also `--background`) is the page background. **Page-largest `#fafafa`** (`--G50`) is the largest background area (177 units) and the sign-in card fill.
- **Ink `#585962`** (`--G600`, `--muted-foreground`) is the most-read text color (148 characters) used on the link rows. **`#26272b`** (`--G800`, `--foreground`) is the h1 color and the footer-link hover/idle color; **`#1f2937`** colors the subline paragraph.
- **Primary `#131316`** (`--G950`, `--button-background`) fills "Continue with Google" and "Continue with Apple"; **`#202024`** (`--G850`, `--primary`) fills "Sign Up to Chat". Labels are `#fafafa` on both.
- **Hairline `#d9d9df`** (`--G250`, `--border-outline`) is measured once as a border color (the capture shows a thin line under the header and outlined buttons); **`#e4e4e7`** (`--G200`) fills the round "?" help button; **`#ececee`** (`--G150`) is the hover fill of outline controls; `#6b7280` is measured once as a border color.
- **Declared accents** (on `:root`, not measured on rendered elements of this page): `--primary-refresh: #195eff` and `--primary-blue: #1a5eff` (brand blue), `--link: #3e87f3`, `--brand-container-refresh: #e5dfeb` (a lilac, also `--G175`), `--plus-blue: #138eed`, `--secondary-refresh: #1ebe53` and `--secondary-green: rgba(30,190,83,1)`, `--tertiary-refresh: #b460eb`, `--error: #cc3434`, `--warning: #ff9800`, plus two gradients, `--plus-gradient` and `--labs-gradient`, for paid tiers and labs.

The grey ladder is `G0 #f8f8f8`, `G50 #fafafa`, `G100 #f4f4f5`, `G150 #ececee`, `G175 #e5dfeb`, `G200 #e4e4e7`, `G250 #d9d9df`, `G300 #c8c8cf`, `G400 #a2a2ac`, `G500 #7c7c87`, `G600 #585962`, `G700 #3f3f46`, `G750 #303136`, `G800 #26272b`, `G850 #202024`, `G900 #18181b`, `G950 #131316`.

## Typography

One brand family, **atHauss**, is loaded and accounts for all 281 weighted characters; the stack continues `ui-sans-serif, system-ui, sans-serif` plus emoji families. The `:root` also names `--font-character-sans` (`characterSans`), `--font-character-mono` (`characterMono`), `--font-inter`, and `--font-libre-baskerville`, and the stylesheet declares `characterSans`, `characterMono`, `libreBaskerville`, `Inter` and `Noto Sans`; none of these were measured on rendered text of this page.

- **Display**: atHauss 36px / 40px, weight 600, letter-spacing -0.72px (-2%), `#26272b`, centered, for "Get access to 10M+ Characters" (360px wide, 80px tall, two lines).
- **Body**: atHauss 18px / 27px, weight 400, `#1f2937`, for "Sign up in just ten seconds".
- **Button**: atHauss 14px / 20px, weight 400, for all buttons.
- **Nav / links**: atHauss 16px / 24px, weight 400, `#585962`, with `8px 16px` padding (76×40px for "About").
- Small print: 12px (64 characters) and 11px (55 characters) for the legal line and the policy row.
- Weights measured: 400 (232 characters), 600 (27), 500 (19), 100 (2), 700 (1).

Font substitute if atHauss is unavailable: the site's own stack falls back to the system UI sans; any neutral grotesque with a 600 weight and tight display tracking is a reasonable stand-in (suggestion, not measurement).

## Layout

A single-screen composition: the header is full width with a 1px `#d9d9df` bottom border; the hero image is wide with a large corner radius; the sign-in card overlaps the image's left edge, and the card carries a measured `transform` of `matrix(1, 0, 0, 1, 0, 42)` (a 42px vertical offset). The card's content column is 360px wide (h1 and paragraph), its buttons are 356px wide and 50px tall, and its padding is `24px 20px`. The footer link row is a centered `nav` 1280px wide and 80px tall.

Spacing measured on the page: gaps of 8px (10 uses) and 12px (4); paddings of 8px (14), 16px (11), 20px (2), 22px, 24px, 40px and 4px (1 each). The `:root` defines `--spacing-xxs: 4px`, `--spacing-xs: 8px`, `--spacing-s: 12px`, `--spacing-m: 16px`, `--spacing-l: 20px` and `--spacing-xl: 24px`, matching the measured values, plus NextUI spacing units (`--nextui-spacing-unit: 4px`).

## Elevation & Depth

Mostly flat with one soft lift. The sign-in card carries `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px` (a standard medium shadow, measured once), appended to two zero-valued ring shadows. The `:root` additionally declares a "refresh" shadow set: `--shadow-refresh-control`, `--shadow-refresh-control-outline`, `--shadow-refresh-control-primary`, `--shadow-refresh-control-stroke` and `--shadow-refresh-floating` (`0px 15px 35px rgba(103,110,118,0.08), 0px 5px 15px rgba(0,0,0,0.12)`), none of which were measured on this page. Elevation tokens `--elevation-0-refresh` (`#fafafa`) to `--elevation-5-refresh` (`#dbdbdb`) step the surface grey instead of adding shadow.

## Shapes

Generous and consistent: the measured radii are 12px (3 uses, the large sign-in buttons), 30px (2 uses, the header pills), 32px (1, the hero image), 24px (1, the sign-in card) and `9999px` (1, the round "?" button). The theme also declares `--radius: 2rem` (32px), NextUI `--nextui-radius-small: 8px` and `--nextui-radius-large: 14px`. The stepping is: control 12px, card 24px, image 32px, small pills 30px, circles 9999px.

## Components

- **Primary sign-in button**: `#131316` fill, `#fafafa` 14px label with a provider glyph at left (Google "G", Apple), 12px radius, 356×50px, `0px 16px` padding. Hover keeps the fill and lowers opacity to 0.8.
- **Header pill (dark)**: "Sign Up to Chat", `#202024` fill, `#fafafa` label, 30px radius, 40px tall; hover opacity 0.8.
- **Header pill (outline)**: "Login", transparent fill, 30px radius, outlined in the capture; hover fill `#ececee` (opacity 0.8 recorded).
- **Email button**: "Continue with email", transparent with an envelope icon and an outline, 12px radius; hover fill `#ececee`.
- **Divider**: the word "OR" in small gray type between the provider buttons and the email button.
- **Sign-in card**: `#fafafa`, 24px radius, `24px 20px` padding, medium shadow; legal line "By continuing, you agree with the Terms and Privacy Policy" at 11px–12px with the links in `#26272b`.
- **Link rows**: `#585962` at 16px (About, Careers, Safety Center, Blog) and 12px policy links; links do not change color on hover (color `#26272b` before and after).
- **Help button**: a 9999px-radius circle in `#e4e4e7` with a "?" glyph, hover fill `#ececee`.

## Design System Architecture

No public design-system site was found on the pages opened (the landing page at `https://character.ai/`). The system is, however, visible in the shipped `:root` (283 custom properties) as a layered token set: a numbered grey primitive scale (`--G0` to `--G950`), semantic aliases in the shadcn style (`--background`, `--foreground`, `--card`, `--card-foreground`, `--popover`, `--muted`, `--muted-foreground`, `--accent`, `--secondary`, `--border`, `--input`, `--ring`, `--radius: 2rem`, `--destructive`), a second Material-like "refresh" generation (`--primary-refresh`, `--on-primary-refresh`, `--surface-refresh`, `--surface-variant-refresh`, `--outline-refresh`, `--scrim-refresh`, `--elevation-0-refresh` to `--elevation-5-refresh`, `--error-refresh`, `--warning-refresh`, `--secondary-refresh`, `--tertiary-refresh`), surface and icon aliases (`--surface-elevation-1` to `-5`, `--icon-primary`, `--icon-secondary`, `--icon-inverted`), scrim and transparency steps (`--scrim-0` to `--scrim-80`, `--transparency-4` to `--transparency-16`), spacing tokens (`--spacing-xxs` to `--spacing-xl`), font variables (`--font-at-hauss`, `--font-character-sans`, `--font-character-mono`, `--font-inter`, `--font-libre-baskerville`), and NextUI, Toastify, Swiper and Tailwind (`--tw-*`) variables from libraries. Source of measurement: https://character.ai/.

## Do's and Don'ts

Do:
- Keep the interface neutral: `#f4f4f5` canvas, `#fafafa` cards, `#131316` and `#202024` for actions.
- Round generously and in steps: 12px controls, 24px cards, 32px hero media, 30px header pills, circles for icons.
- Let one large illustration provide color; overlap a white card across its edge.
- Set the headline in atHauss 600 at 36px with -0.72px tracking.

Don't:
- Don't add brand blue, lilac or the gradients to this landing layout; they are declared but were not measured on it.
- Don't use Tailwind's `#3b82f6` ring or the library variables as brand colors.
- Don't change link color on hover; the measured footer links keep `#26272b`.
- Don't document the chat product from this page; it was not measured.

## Responsive Behavior

The mobile pass at a 390px viewport recorded the same values as the desktop pass: the h1 at 36px / 40px (360×80px), the paragraph at 18px / 27px (360×27px), the primary button at 356×50px with 12px radius, and an identical font-size table (14px: 79 characters, 12px: 64, 11px: 55, 16px: 29, 36px: 27, 18px: 27). Because the recorded widths are the same, no different mobile layout was captured, so the header, the hero image and the card at mobile width are not measured. Breakpoint values were not recorded. Tablet widths and dark mode were not measured (the `:root` declares both `--*-refresh` and inverted tokens such as `--brand-bg-inverted`, but a dark theme was not rendered).

## Iteration Guide

1. Start with `canvas #f4f4f5`, cards `#fafafa`, text `#585962` and `#26272b`, actions `#131316` / `#202024`.
2. Use atHauss: 36px / 40px / 600 / -0.72px for the headline, 18px / 27px body, 14px buttons, 16px links.
3. Build the sign-in card at 24px radius with a medium shadow, 50px-tall 12px-radius provider buttons and an outline email button.
4. Use 30px-radius pills for header actions and a 32px-radius hero illustration the card overlaps.
5. Use hover opacity 0.8 on filled buttons and `#ececee` fill on outline controls.
6. Re-measure the signed-in product before documenting it; only the logged-out landing page was measured.
