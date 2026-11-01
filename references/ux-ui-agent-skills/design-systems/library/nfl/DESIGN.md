---
version: alpha
name: NFL
category: "Sports & Fitness"
description: "NFL International (nfl.com/international) is a #f4f8f8 light-grey sports portal with white cards on 8px radii and soft layered shadows, #172029 ink, black #000000 4px-radius uppercase CTA buttons, a #272731 live-score strip, a #13141d footer, and bold uppercase display headings in the site's fontDisplay/fontSans faces."
colors:
  canvas: "#f4f8f8"
  ink: "#172029"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-card: "#ffffff"
  surface-hover: "#ecf0f0"
  surface-placeholder: "#bac1cf"
  ink-muted: "#626c80"
  footer-bg: "#13141d"
  header-dark: "#272731"
  border-light: "#d2dae1"
  nfl-navy: "#013369"
  nfl-red: "#d50a0a"
  nfc-navy-dark: "#00124a"
typography:
  display:
    fontFamily: fontDisplay, "fontDisplay Fallback"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: 0.48px
    textTransform: uppercase
  card-title:
    fontFamily: fontSans, "fontSans Fallback"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.32px
  nav:
    fontFamily: fontDisplay, "fontDisplay Fallback"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: 0.56px
  body:
    fontFamily: fontSans, "fontSans Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: fontSans, "fontSans Fallback"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  headline-link:
    fontFamily: fontSans, "fontSans Fallback"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 0.28px
  button-outline:
    fontFamily: fontDisplay, "fontDisplay Fallback"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 0.72px
  stats:
    fontFamily: fontStats, "fontStats Fallback"
    fontSize: 10px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 0.4px
rounded:
  xs: 1px
  sm: 2px
  md: 4px
  lg: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 36px
    border: "1px solid #000000"
  button-outline:
    textColor: "{colors.on-primary}"
    typography: "{typography.button-outline}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 36px
    border: "1px solid #000000"
  headline-link:
    textColor: "{colors.primary}"
    typography: "{typography.headline-link}"
    rounded: "{rounded.sm}"
    height: 38px
  headline-link-hover:
    backgroundColor: "{colors.surface-hover}"
  promo-card:
    backgroundColor: "{colors.surface-placeholder}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.lg}"
    boxShadow: "rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 12px 20px -10px, rgba(0, 0, 0, 0.08) 0px 24px 48px -10px"
  score-strip:
    backgroundColor: "{colors.header-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.surface-card}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.lg}"
    boxShadow: "rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 12px 20px -10px, rgba(0, 0, 0, 0.08) 0px 24px 48px -10px"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.on-primary}"
    padding: 40px 0px
---

# NFL

## Overview

The measured site is the National Football League's international home page, https://www.nfl.com/international (title "NFL International Homepage | NFL.com Official Site of the National Football League", `lang="en"`); the request to https://www.nfl.com was redirected there. It was captured at 1280px wide with a 4147px scroll height and at 390px for the mobile pass. A third-party display ad (a Fiverr banner) sits below the header in the capture; it is advertising inventory, not NFL UI.

The page is a compact sports portal. A 107px dark `#272731` strip runs across the top with a "WATCH EVERY GAME WITH GAME PASS" link, the RedZone/INTL badges and a horizontal live scoreboard (team abbreviations, records, kick-off times such as "MON 12:00AM"). Beneath it a 48px white navigation bar carries the NFL shield and uppercase menus (WATCH, GAMES, NEWS, TEAMS, STATS, SCHEDULES) on the left and Tickets, ESPN Fantasy, VIP Experiences and Sign In on the right.

The content area (3049px of `#f4f8f8`) is a three-column grid: a wide left column of large media cards (the Game Pass / DAZN "Game Changer" promo, a video player, an "ANALYSIS" carousel of three news cards, a "Free Game of the Week" promo, the NFL FLAG card) and a narrow right rail of white cards (a NEWS / MY TEAM headline list, "Choose your favorite team" with SIGN IN / SIGN UP, a survey prompt, Game Pass, International Fan of the Year, lululemon collection, International Football Development, Ways to Watch). Each promo card ends with a full-width black uppercase button — SIGN UP, SEE NOMINEES, SHOP NOW, EXPLORE. A `#13141d` footer lists the AFC and NFC team logos and six link columns.

The imagery is loud partner and league key art (yellow-and-black DAZN, NFL FLAG in royal blue, Fan of the Year in neon gradients) set against a very restrained grey-and-white interface. Microcopy is brisk and newsy: "Lamar-less again: Jackson ruled out, Huntley will get another start for Ravens".

## Colors

- **Canvas `#f4f8f8`** — the body background and largest area (9024 area weight); declared as `--color-ls-level-1`.
- **Ink `#172029`** — the most-read text (2468 chars); `--color-ls-800` / `--color-ds-level-3`.
- **Primary `#000000` / on-primary `#ffffff`** — the black CTA buttons ("SIGN UP", "SEE NOMINEES", "SHOP NOW", "EXPLORE") with white text and a 1px black border. Black is also the second most-read text colour (1404 chars).
- **Surface card `#ffffff`** — right-rail cards and the white navigation bar (`--color-ls-level-2`).
- **Surface hover `#ecf0f0`** — the hover fill of headline links in the news list (`--color-ls-level-3`, `--color-ls-100`).
- **Surface placeholder `#bac1cf`** — the grey fill behind the large promo images (`--color-ls-400`, 1516 area weight).
- **Ink muted `#626c80`** — metadata, scoreboard times and card descriptions (`--color-ls-600`, 1059 chars).
- **Header dark `#272731`** — the live-score strip (`--color-ds-level-2`).
- **Footer `#13141d`** — `--color-ds-level-1`.
- **Border light `#d2dae1`** — `--color-ls-200` / `--color-bottom-350`.
- **NFL navy `#013369`** and **NFL red `#d50a0a`** — declared as `--color-nfl-primary` and `--color-nfl-secondary`, and measured as small background areas; they appear in the shield and league art rather than in interface chrome. The conference scales `--color-nfc-*` (navy, e.g. `#00124a`) and `--color-afc-*` (red, e.g. `#aa0808`) are also declared.

Accessibility focus colours are declared per surface: `--color-ls-accessibility-focused` `#da1884` on light, `--color-ds-accessibility-focused` `#ff0090` on dark.

## Typography

The site uses three font roles exposed by the Next.js font loader as `fontSans`, `fontDisplay` and `fontStats`, each with a "Fallback" face. The stylesheet also declares `@font-face` families named All-ProSans-Regular, All-ProSans-Medium, All-ProSans-Bold and All-ProSans-Light; which of these files sits behind each alias was not resolved.

- **Display (`fontDisplay`)** — section headings such as "ANALYSIS": 24px/28px, weight 700, +0.48px, uppercase. The "FAVORITE TEAM" panel heading measured 32px weight 700 with +0.64px.
- **Nav (`fontDisplay`)** — 14px/16px, weight 700, +0.56px, for the score-strip and menu labels.
- **Outlined button (`fontDisplay`)** — 18px/20px, weight 700, +0.72px ("SIGN IN").
- **Card title (`fontSans`)** — 16px/20px, weight 700, +0.32px.
- **Body (`fontSans`)** — 16px/20px, weight 400.
- **Headline link (`fontSans`)** — 14px/18px, weight 700, +0.28px, used for the news list.
- **Button (`fontSans`)** — 16px/20px, weight 700, uppercase labels, normal tracking.
- **Stats (`fontStats`)** — 10px/14px, weight 500, +0.4px for scoreboard numbers and times (848 chars at 10px).

Weights are 700 (3234 chars), 400 (1998) and 500 (852). Every size carries a small positive tracking of about 2–4% of the size, which gives the text its sporty, slightly spaced look. For a substitute, use a grotesque with a bold condensed-feeling uppercase (e.g. Barlow or Roboto Condensed for display) and a neutral sans (e.g. Inter) for body text.

## Layout

The desktop page is 1280px wide with a centred grid of three columns in the content area: two thirds for media cards, one third for the right rail. Measured bands: a 107px `#272731` score strip, a 48px white nav bar, 3049px of `#f4f8f8` content and a 943px `#13141d` footer with `40px 0px` padding and five columns of links under the AFC/NFC logo grid. The stylesheet declares breakpoints `--breakpoint-md` 48rem and `--breakpoint-xl` 81rem.

Spacing is small and dense: gaps 8px (98 instances), 4px (40), 24px (29), 16px (24); paddings 8px (128), 16px (81), 2px (48). The desktop header showed 22 visible links (scoreboard items plus menus), with no menu toggle.

## Elevation & Depth

Cards lift off the grey canvas with a soft two-layer shadow, measured on 38 elements: `rgba(0, 0, 0, 0.05) 0px 12px 20px -10px, rgba(0, 0, 0, 0.08) 0px 24px 48px -10px`. The negative spread keeps the shadow under the card rather than around it, so the edges stay crisp. A side shadow (`rgba(0, 0, 0, 0.1) 4px 0px 6px 0px, rgba(0, 0, 0, 0.05) 1px 0px 4px 0px`) was measured once on the scoreboard. The stylesheet also declares `--drop-shadow-md: 0 3px 3px #0000001f`. Dark bands (score strip, footer) frame the light content.

## Shapes

Measured radii: fully rounded (computed 3.35544e+07px, 34 elements), 2px (28 — including the headline-link hover rows), 8px (27 — cards and promo media), `1px 1px 0px 0px` (27) and 4px (18 — buttons). Declared radii include `--radius-xs` .125rem, `--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem and a `--radius-banner` of 1.25rem. The interface is mostly rectangles with small radii; roundness is reserved for logos and icons.

## Components

**Primary button** — black `#000000` fill, `1px solid #000000` border, white `fontSans` 16px/20px weight 700 uppercase label, 4px radius, `0px 16px` padding, 36px tall, stretched to the card width (311px in the right rail). Labels: SIGN UP, SEE NOMINEES, SHOP NOW, EXPLORE, with a small arrow icon on outbound links.

**Outlined button** — "SIGN IN" in `fontDisplay` 18px/20px weight 700, +0.72px, 4px radius, `0px 16px`, 36px tall, 1px black border; paired with SIGN UP in the favourite-team card.

**Headline list** — 14px/18px bold headlines in black with a document icon, 38px rows, 2px radius; hover fills the row with `#ecf0f0`.

**Score strip** — `#272731` bar with `fontDisplay` 14px/700 white labels and `fontStats` 10px/500 times in `#626c80` inside white score cells.

**Promo card** — 8px radius, `#bac1cf` image placeholder, layered soft shadow, a 16px/700 caption under the image and a full-width black button.

**News card** — white card with an image, a small uppercase "NEWS" eyebrow and a 14px bold two-line headline with an ellipsis.

**Footer** — `#13141d`, AFC and NFC team logo grids, white `fontDisplay` 18px/700 column titles and link columns, legal copy at the bottom right.

## Design System Architecture

No public NFL design system or brand guideline site was found: https://www.nfl.com/brand and https://www.nfl.com/about both returned HTTP 404.

The de-facto system is the shipped Tailwind v4 theme with NFL-specific tokens. Colours are organised by surface: an `ls` (light surface) scale (`--color-ls-level-1` `#f4f8f8`, `level-2` `#fff`, `level-3` `#ecf0f0`, `--color-ls-200` … `--color-ls-800`) and a `ds` (dark surface) scale (`--color-ds-level-1` `#13141d`, `level-2` `#272731`, `level-3` `#172029`, `--color-ds-200` `#393e4a`, `--color-ds-400` `#545a68`, `--color-ds-600` `#c6cbd7`), each with its own accessibility focus and pressed colours. League colours are named `--color-nfl-primary` `#013369` and `--color-nfl-secondary` `#d50a0a`, with conference scales `--color-afc-*` and `--color-nfc-*`, product scales (`--color-plus-*`, `--color-pro-*`, `--color-combine-*`) and status colours (`--color-success-250`, `--color-warning-250`, `--color-error-250`/`750`). Fonts are injected through three role-named variables (`--font-sans`, `--font-display`, `--font-stats`), and animations include `placeholder-pulse` and `placeholder-strobe` for loading skeletons.

## Do's and Don'ts

**Do**
- Keep the canvas `#f4f8f8` and put content on white 8px-radius cards with the soft negative-spread shadow.
- Use black 36px buttons with 4px radius and uppercase bold labels for every card action.
- Set section headings in the display face, uppercase, bold, with positive tracking.
- Use the dark `#272731` strip for live scores and `#13141d` for the footer.
- Use `fontStats` for numbers and times.

**Don't**
- Don't use NFL navy or red as large interface fills; on this page they live in the shield and artwork.
- Don't round buttons into pills.
- Don't document or imitate ad slots (the display banner under the header) as part of the system.
- Don't use heavy, dark drop shadows; keep the shadow soft and below the card.

## Responsive Behavior

Measured at 390px wide:

- The score strip shrinks to 99px and the white nav bar to 52px; 18 header links were visible and a "More menu choices" toggle appeared (desktop: 22 links, no toggle).
- The content area becomes 4484px tall in up to two columns, followed by a 1094px footer.
- Section headings drop from 24px/28px to 20px/24px with +0.8px tracking; the "FAVORITE TEAM" heading stays 32px; news headlines drop to 14px.
- Body text drops from 16px/20px to 14px/18px.
- The primary button becomes "Sign up" at 14px/18px, keeping the black fill, 4px radius, `0px 16px` padding and 36px height.
- The most common mobile size is 12px (3062 chars).

Behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Set a `#f4f8f8` canvas and `#172029` text; load the sans, display and stats faces.
2. Add the `#272731` score strip (white 14px/700 labels, 10px stats numbers) and a white nav bar with uppercase bold menus.
3. Lay out two-thirds media cards and a one-third right rail with the measured 24px gap.
4. Build cards white with 8px radius and the shadow `rgba(0, 0, 0, 0.05) 0px 12px 20px -10px, rgba(0, 0, 0, 0.08) 0px 24px 48px -10px`.
5. End each card with a full-width black 36px button, 4px radius, white uppercase 16px/700 label.
6. Use uppercase 24px/700 display headings ("ANALYSIS") above carousels.
7. Close with the `#13141d` footer, AFC/NFC logo grids and link columns.
