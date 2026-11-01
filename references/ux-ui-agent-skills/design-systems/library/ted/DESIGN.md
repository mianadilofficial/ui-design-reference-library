---
version: alpha
name: TED
category: "Culture & Events"
description: "TED (ted.com) is a white #ffffff editorial video site set entirely in Inter with tight negative tracking, near-black #121212 text, TED red #eb0028 uppercase topic labels, a #d91e18 4px-radius MEMBERSHIP button, a black topic bar, a #262626 newsletter band and a #121212 footer."
colors:
  canvas: "#ffffff"
  page-body: "#f6f6f6"
  ink: "#121212"
  primary: "#d91e18"
  on-primary: "#ffffff"
  ink-tertiary: "#696969"
  ted-red: "#eb0028"
  ink-on-dark-secondary: "#b5b5b5"
  ink-muted: "#767676"
  text-input-text: "#000000"
  ink-secondary: "#494949"
  surface-dark: "#262626"
  border-light: "#d9d9d9"
  accent-blue: "#2763ff"
  membership-yellow: "#ffbc00"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 44px
    fontWeight: 600
    lineHeight: 46.2px
    letterSpacing: "-2.2px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: "-0.21px"
  button:
    fontFamily: Inter, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16.2px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: 0.48px
    textTransform: uppercase
  button-secondary:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18.9px
    letterSpacing: 0.14px
    textTransform: capitalize
rounded:
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 9px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 40px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 9px 0px
    height: 38px
  topic-label:
    textColor: "{colors.ted-red}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-tertiary}"
  nav-link:
    textColor: "{colors.ink-tertiary}"
    typography: "{typography.body}"
    padding: 16px 0px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    padding: 0px 2px 0px 24px
    height: 56px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 20px 0px
  newsletter-band:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

# TED

## Overview

TED is the non-profit behind the TED conferences and TED Talks; its own organisation page describes the belief that "powerful ideas, powerfully presented, move us: to feel something, to think differently, to take action." The measured site is the home page https://www.ted.com/ (title "TED: Ideas change everything", `lang="en"`), captured at 1280px wide with a 10455px scroll height and at 390px for the mobile pass.

The home page is a dense, magazine-like video index. A 56px white header carries the red TED logo, the tagline "Ideas change everything", menu buttons (WATCH, DISCOVER, ATTEND, PARTICIPATE, ABOUT), a search icon and a small red MEMBERSHIP button. The 818px hero is a two-column feature: a large talk thumbnail on the right and, on the left, a red uppercase topic label, a 32px headline ("Why I'm building libraries inside prisons"), a short paragraph and speaker credit, followed by a row of four smaller talk cards. Beneath it, a 106px black bar holds "Discover" and a row of topic chips. The rest of the page is a long white column of rails — Popular, Newest from TED, Popular on TED, Trending ideas — built from 16:9 thumbnails with a red topic label, a bold title and grey metadata. Topic features ("AI", "TED-Ed", "Psychology") open with an 84px word, a big image and supporting cards; a numbered "Trending talk ideas" list, podcast cards, a dark #262626 newsletter band and a near-black footer close the page.

The voice is curious and direct, written as provocations: "Go ahead. Overthink it.", "AI brain fry is real.", "Why the future is human … plus AI". Photography of speakers on stage, red TED logos and editorial illustration carry the imagery; the interface stays neutral.

## Colors

- **Canvas `#ffffff`** — the largest background area (10416 area weight) and the colour behind the content rails. The body element itself paints **page body `#f6f6f6`** (`--color-gray-1`), which shows in the footer region and on hover fills.
- **Ink `#121212`** — the most-read text (5530 chars); the site names it `--color-black`, `--color-on-light-high-emphasis` and `--color-textPrimary-onLight`. It is also the footer fill.
- **Primary `#d91e18`** (`--color-red-700`) with **on-primary `#ffffff`** — the MEMBERSHIP button.
- **TED red `#eb0028`** — declared as `--color-ted-red` and `--color-red-500`; used for every uppercase topic label (327 chars measured) and in the logo.
- **Ink tertiary `#696969`** (`--color-on-light-tertiary`) — header links and the tagline (1317 chars).
- **Ink secondary `#494949`** (`--color-on-light-secondary`) — the menu buttons (measured `rgb(73, 73, 73)`).
- **Ink muted `#767676`** — talk metadata (durations, view counts).
- **Ink on dark secondary `#b5b5b5`** (`--color-on-dark-secondary`) — secondary text inside dark bands.
- **Surface dark `#262626`** (`--color-gray-7`) — the newsletter band.
- **Border light `#d9d9d9`** (`--color-on-light-low-emphasis`) — the header menu dividers.
- **Accent blue `#2763ff`** (`--color-blue-500`) — a measured promotional strip (60 area weight).
- **Membership yellow `#ffbc00`** — declared as `--color-membershipYellow` for the membership programme.

Text inputs render in pure `#000000`. The site also declares system-info colours (`--color-systemInfo-success` `#62baaa`, `--color-systemInfo-error-onLight` `#e51b60`, `--color-systemInfo-warning` `#febf00`, `--color-systemInfo-link` `#0e308a`) and a set of illustrative hues (lavender `#ae97d8`, seafoam `#80b7ca`, teal `#68c8bb`, lightPersimmon `#ff8561`, offWhite `#fffaee`, warmGray `#b6aca3`); none of these was measured as a dominant colour on the home page.

## Typography

One family: **Inter**, loaded as a variable font (100–900), plus an icon font `ted-ui-icons`. All 9184 measured characters are Inter. The fallback stack is declared in `--font-sans`: `Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans`.

The type is set tight. Every size carries negative tracking except labels:

- **Display** — 32px/35.2px, weight 600, −1.28px (the hero headline and section titles).
- **Topic words** — 84px weight 600 ("AI", "TED-Ed", "Psychology").
- **Card titles** — 18px with −0.36px tracking (1467 chars) and 20px with −0.6px.
- **Body** — 14px/18.2px weight 400, −0.21px (the most common size, 4498 chars).
- **Metadata** — 12px with −0.042px tracking.
- **Topic label** — 12px/18px weight 600, +0.48px, uppercase, TED red.
- **Buttons** — MEMBERSHIP is 12px/16.2px weight 700; the "Select" buttons are 14px/18.9px weight 700, +0.14px, capitalised.

Weights in use are 400 (6116 chars), 600 (2515) and 700 (553). The design system's type scale lives in `--text-tui-*` variables (from `--text-tui-2xs` .6875rem up to `--text-tui-15xl` 5.25rem) with matching `--leading-tui-*` and `--tracking-tui-*` values (`--tracking-tui-tightest` −.0065em).

## Layout

The desktop page is 1280px wide. Measured bands: an 818px white hero in two columns, a 106px black discovery bar, a 7921px white content area laid out up to four columns, a 491px `#262626` newsletter band in three columns, and a 1119px footer region. Rails use four cards per row with 16:9 thumbnails; topic features switch to a large image on the left and a stack of cards on the right.

Spacing follows a 4px base (`--spacing: .25rem`). The most frequent gaps are 20px and 40px, then 4px and 8px; the most frequent paddings are 20px, 4px, 12px, 16px and 40px. The nav links use `16px 0px` padding inside the 56px header. Containers are declared from `--container-xs` 20rem to `--container-5xl` 64rem.

## Elevation & Depth

TED is almost entirely flat. A single measured shadow appears (`rgba(0, 0, 0, 0.1) 0px 2px 1px 0px`, one element), and the site declares `--drop-shadow-sm: 0 1px 2px #00000026`. Separation is made with colour bands — white rails, the black discovery bar, the `#262626` newsletter block, the `#121212` footer — and with thin borders: `#121212` (8 elements), `#d9d9d9` (5) and `#12121229` (3). Hovering a menu button fills it with `#f6f6f6` rather than lifting it.

## Shapes

Corners are small and consistent. Measured radii: 4px (39 elements), 2px (25), one fully rounded element (computed 1e+07px, matching `--radius-full: 10000000px`) and one `0px 4px 4px 0px` half-rounded input end. Buttons and cards use 4px (`--radius-sm`); thumbnails and small tags use 2px. The site declares larger steps (`--radius-md` 8px, `--radius-lg` 12px, `--radius-2xl` 24px) that were not measured on the home page. Thumbnails are rectangular 16:9 frames.

## Components

**Membership button** — `#d91e18` fill, white Inter 12px/700 text, 4px radius, 40px tall, 113px wide; the only filled red button in the header.

**Select button** — white fill, `#121212` Inter 14px/700 capitalised text with +0.14px tracking, 4px radius, `9px 0px` padding, 38px tall; used under newsletter options in the dark band.

**Subscribe button** — measured with `#aaaaab` fill, `#3b3a3e` text, 4px radius, `24px 40px` padding, 48px tall, next to the newsletter email field.

**Header nav** — 56px white bar; links in Inter 14px/400 `#696969`; menu buttons in `#494949` with `#d9d9d9` dividers, filling with `#f6f6f6` on hover.

**Talk card** — 16:9 thumbnail with a small duration badge, an uppercase TED-red topic label (12px/600, +0.48px), an 18px title and 12px grey metadata.

**Topic feature** — an 84px/600 topic word, a short description, a "Browse all" link and a large image with three or four supporting cards.

**Search / email input** — 56px tall, Inter 14px, black text, `0px 2px 0px 24px` padding.

**Newsletter band** — `#262626` background, white 32px "Newsletters" heading, four newsletter cards each with a "Select" button, and an email field on the right.

**Footer** — `#121212` background, white Inter 14px/700 column heads (Explore, Our community, Newsletters), app-store badges and social icons.

## Design System Architecture

No public TED design system or brand guideline site exists. https://www.ted.com/brand returned HTTP 404; https://www.ted.com/about/our-organization links no brand guidelines; https://www.ted.com/about/our-organization/contact-us/press-and-media-information routes logos and images through a request form rather than publishing a kit.

The de-facto system is visible in the shipped CSS: a Tailwind v4 theme with TED-specific tokens. Colour names describe roles by surface and emphasis — `--color-on-light-high-emphasis` `#121212`, `--color-on-light-secondary` `#494949`, `--color-on-light-tertiary` `#696969`, `--color-on-light-low-emphasis` `#d9d9d9`, `--color-on-dark-secondary` `#b5b5b5`, `--color-on-dark-tertiary` `#828282`, `--color-outline-onLight` / `--color-outline-onDark` — alongside a numbered red scale (`--color-red-50` `#ffe9e9`, `red-300` `#fcdbdc`, `red-500` `#eb0028`, `red-700` `#d91e18`, `red-900` `#a7140f`), a blue scale and a gray scale. Typography uses a parallel "tui" scale (`--text-tui-*`, `--leading-tui-*`, `--tracking-tui-*`), and radii run `--radius-none` 0px, `sm` 4px, `md` 8px, `lg` 12px, `2xl` 24px, `full`. Border widths are named `thin` 1px, `thick` 1.5px, `thicker` 2px and `thickest` 3px. The `--osano-*` variables belong to the cookie-consent widget and are not part of the brand.

## Do's and Don'ts

**Do**
- Set everything in Inter and keep negative tracking on headlines (−1.28px at 32px).
- Label every piece of content with a 12px uppercase TED-red topic tag.
- Keep the canvas white and the text near-black `#121212`, not pure black.
- Use 4px radius on buttons and cards, 2px on small elements.
- Reserve filled red (`#d91e18`) for the membership action.
- Use full-width dark bands (`#000000`, `#262626`, `#121212`) to break up long rails.

**Don't**
- Don't add shadows to cards; TED separates content by space and colour bands.
- Don't use large radii or pill buttons for primary actions.
- Don't introduce a second typeface or a serif.
- Don't use TED red for long text; it is for labels, the logo and the main action.
- Don't treat the cookie-banner `--osano-*` colours as brand colours.

## Responsive Behavior

Measured at 390px wide:

- The header stays 56px tall and white, with two visible header links (including SIGN IN) and a "Menu" toggle; desktop showed three header links and a WATCH menu button.
- Body text grows from 14px/18.2px to 16px/20.8px with −0.24px tracking.
- The "Discover" heading inside the black band measured 44px/46.2px weight 600 with −2.2px tracking; topic words ("AI", "TED-Ed", "Psychology") measured 50px; the numbered trending items measured 30px weight 400; "Newsletters" measured 24px.
- The "Select" button keeps its desktop spec (14px/700, 4px radius, 38px).
- The mobile band sequence is a 90px `#f6f6f6` strip, an 85px white header area, media, a 360px black "Discover" band, long white rails, a 173px `#cee1ff` promotional band, a 1272px `#262626` newsletter band and a 615px `#f6f6f6` region.
- Up to five card columns were measured in a row on mobile (a horizontally scrolled rail); desktop measured four.

Behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Start with a white canvas, `#121212` text and Inter at 14px/18.2px with −0.21px tracking.
2. Build a 56px white header: red TED wordmark, `#696969` links, `#494949` menu buttons with `#d9d9d9` dividers, and a 40px `#d91e18` MEMBERSHIP button with 4px radius.
3. Lead with a two-column feature: 32px/600 headline at −1.28px, red uppercase topic label above, image on the right.
4. Stack rails of four 16:9 talk cards with 20px or 40px gaps; each card gets a red label, an 18px title and 12px `#767676` metadata.
5. Break the page with a black discovery bar, an 84px topic word for features, and a `#262626` newsletter band.
6. Close with a `#121212` footer in white Inter 14px/700 headings.
7. Check: no card shadows, radii only 2px/4px, all text Inter, red used only for labels and the membership action.
