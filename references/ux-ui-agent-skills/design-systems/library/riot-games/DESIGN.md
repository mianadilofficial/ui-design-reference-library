---
version: alpha
name: Riot Games
category: "Gaming"
description: "Riot Games' corporate site (riotgames.com) is a near-black, art-led game publisher shell — #0a0a0a hero and news bands, a #1f1f1f games band and a #111111 fixed header, with crimson #d1363a as the single brand accent on pill CTAs (25.6px Sign In, 24px Explore Careers). Section titles are set in the proprietary Riot Sans Latin at 48px/700 with -1.44px tracking; everything else runs Inter V Latin (16px/400 body, 31.008px/700 feature titles) with tight negative tracking, 8px-radius news cards and parallelogram clip-path game cards."

colors:
  primary: "#d1363a"
  primary-signin: "#d13639"
  on-primary: "#f9f9f9"
  on-signin: "#111111"
  canvas: "#0a0a0a"
  surface-showcase: "#1f1f1f"
  surface-header: "#111111"
  surface-footer: "#252423"
  surface-careers: "#ebebeb"
  surface-main: "#e7e6e3"
  surface-search: "#2b2a29"
  fill-card: "#80808033"
  fill-card-hover: "#8080804d"
  fill-stat: "#adacaa33"
  ink: "#f9f9f9"
  ink-white: "#ffffff"
  ink-headline: "#f0f0f0"
  ink-soft: "#f9f9f999"
  ink-on-light: "#2b2a29"
  ink-muted: "#656462"
  ink-tag: "#656462e6"
  ink-black: "#000000"
  gold: "#c5b174"

typography:
  display-section:
    fontFamily: "\"Riot Sans Latin\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: -1.44px
  display-section-careers:
    fontFamily: "\"Riot Sans Latin\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: -1.44px
  display-section-mobile:
    fontFamily: "\"Riot Sans Latin\", Arial, sans-serif"
    fontSize: 31.008px
    fontWeight: 700
    lineHeight: 46.512px
    letterSpacing: -0.93024px
  heading-feature:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 31.008px
    fontWeight: 700
    lineHeight: 37.2096px
    letterSpacing: -0.93024px
  heading-feature-mobile:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 27.008px
    fontWeight: 700
    lineHeight: 32.4096px
    letterSpacing: -0.81024px
  heading-card:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 25.2px
    letterSpacing: -0.54px
  stat-number:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 67.2px
    letterSpacing: -0.48px
  stat-label:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
    letterSpacing: -0.48px
  body-lead:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.6px
  body-lead-strong:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 30px
    letterSpacing: -0.6px
  body:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.48px
  tag-category:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 15.008px
    fontWeight: 800
    lineHeight: 22.512px
    letterSpacing: -0.45024px
  button-careers:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: -0.6px
  button-see-more:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 13.008px
    fontWeight: 800
    lineHeight: 13.008px
    letterSpacing: -0.39024px
  button-signin:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 600
    letterSpacing: 0.96px
  nav-link:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 15.6px
    letterSpacing: 1.04px
  nav-link-mobile:
    fontFamily: "Inter, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 1.28px
  footer-link:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 11px
    fontWeight: 800
    lineHeight: 16.5px
    letterSpacing: -0.33px
  footer-legal:
    fontFamily: "\"Inter V Latin\", Arial, sans-serif"
    fontSize: 11.008px
    fontWeight: 400
    lineHeight: 16.512px
    letterSpacing: -0.48px

rounded:
  sm: 6.4px
  see-more: 6.5px
  card: 8px
  cta: 24px
  signin: 25.6px
  search-inner: 32px
  circle: 50%

spacing:
  xs: 8px
  sm: 10px
  md: 16px
  stat: 20px
  lg: 24px
  xl: 32px
  xxl: 48px
  careers-y: 80px
  section-y: 100px

components:
  button-primary:
    backgroundColor: "{colors.primary-signin}"
    textColor: "{colors.on-signin}"
    typography: "{typography.button-signin}"
    textTransform: uppercase
    rounded: "{rounded.signin}"
    padding: 9.6px 22.4px
    height: 34px
  button-careers:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-careers}"
    rounded: "{rounded.cta}"
    padding: 22px 16px
    height: 64px
    width: 260px
  button-see-more:
    backgroundColor: "{colors.fill-card}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-see-more}"
    textTransform: uppercase
    rounded: "{rounded.see-more}"
    padding: 8px 12px
    height: 29px
  button-see-more-hover:
    backgroundColor: "{colors.fill-card-hover}"
  button-hero-watch:
    backgroundImage: "linear-gradient(135deg, rgb(197, 177, 116) 20%, rgb(197, 177, 116) 100%)"
    textColor: "{colors.ink-black}"
    typography: "{typography.heading-feature}"
    rounded: "{rounded.cta}"
    padding: 12px
    height: 72px
    boxShadow: "rgba(197, 177, 116, 0.25) 0px 10px 45px -10px, rgba(197, 177, 116, 0.5) 0px 0px 20px -10px, rgba(197, 177, 116, 0.35) 0px 10px 30px -10px"
  button-hero-watch-hover:
    boxShadow: "rgba(197, 177, 116, 0.25) 0px 10px 30px -10px, rgba(197, 177, 116, 0.5) 0px 10px 30px -10px, rgba(197, 177, 116, 0.5) 0px 10px 35px -10px"
  nav:
    backgroundColor: "{colors.surface-header}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    textTransform: uppercase
    height: 80px
  search-field:
    backgroundColor: "{colors.surface-search}"
    textColor: "{colors.ink-white}"
    rounded: "{rounded.signin}"
    padding: 4.8px 22.4px
    height: 34.59px
  card-news-feature:
    textColor: "{colors.ink}"
    typography: "{typography.heading-feature}"
    rounded: "{rounded.card}"
    boxShadow: "rgba(10, 10, 10, 0.15) 0px 4px 4px 0px"
    width: 658px
  card-news-list:
    backgroundColor: "{colors.fill-card}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-card}"
    rounded: "{rounded.card}"
    boxShadow: "rgba(10, 10, 10, 0.15) 0px 4px 4px 0px"
    height: 134px
    width: 438px
  card-news-list-hover:
    textDecoration: underline
  tag-category:
    textColor: "{colors.ink-tag}"
    typography: "{typography.tag-category}"
    textTransform: uppercase
  card-stat:
    backgroundColor: "{colors.fill-stat}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.stat-label}"
    rounded: "{rounded.card}"
    padding: 20px
  card-game:
    clipPath: "polygon(20% 0px, 100% 0px, 80% 100%, 0px 100%)"
    rounded: "0px"
    width: 393px
    height: 660px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-white}"
    typography: "{typography.footer-link}"
    textTransform: uppercase
    padding: 0px 20px 20px
---

## Overview

riotgames.com is the corporate front door of the studio behind League of Legends, VALORANT, Teamfight Tactics, Legends of Runeterra, Wild Rift and Riftbound. It is not a storefront and it is not a game site — it is a dark, art-led editorial shell that frames each franchise's key art and lets those images carry all of the colour. The site itself contributes three things: near-black surfaces, one crimson accent, and tight bold sans-serif type.

The page reads as a stack of full-bleed bands. A rotating hero carousel (1280×680 at desktop, background `#0a0a0a`) shows a single campaign — during measurement it alternated between a VALORANT Champions Shanghai slide and a Legends of Runeterra patch slide — with a centred title, a two-line lead and one large rounded CTA. Below it, the "What's happening?" band (also `#0a0a0a`, with a faint red radial glow visible in the capture) holds one large news feature on the left and four compact news list cards on the right. Then a `#1f1f1f` "content showcase" band holds the Games carousel of parallelogram cards and the Esports & Entertainment strip. Near the bottom, a light `#ebebeb` careers band ("We're hiring!") breaks the darkness, and a `#252423` footer closes the page.

Colour is rationed. Crimson `#d1363a` is the only UI colour the brand owns on this page: the Sign In pill (measured at `#d13639`), the Explore Careers button, the Riot fist logo in the header, and the computed colour of news-card anchors. Everything else is neutral — near-black fills, translucent grey cards (`#80808033`), off-white ink (`#f9f9f9`). Hero CTAs borrow the campaign's colour (the VALORANT Champions slide uses a gold `#c5b174` gradient button with a matching gold glow), so the hero button is not a fixed brand token.

Typography is two families. **Riot Sans Latin** — the proprietary Riot typeface by Colophon, per the agency case study — appears only on section titles ("What's happening?", "Games", "Esports & Entertainment", "We're hiring!") at 48px/700 with -1.44px tracking. **Inter V Latin** (and plain `Inter` in the global Riot bar) sets everything else: 16px/400 body, 20px leads, 31.008px/700 feature titles, 18px/700 card titles, with a consistent negative tracking of -0.03em (e.g. -0.48px at 16px, -0.6px at 20px, -0.93024px at 31.008px). The nav and Sign In labels invert this: uppercase with positive tracking (1.04px at 13px, 0.96px at 12px).

**Key Characteristics:**
- Near-black canvas `#0a0a0a` with a `#1f1f1f` mid band, a `#111111` fixed header and a `#252423` footer — four distinct darks, never pure `#000000` as a surface.
- One accent: crimson `#d1363a` for pill CTAs and the fist logo; hero CTAs follow the campaign art instead.
- Riot Sans Latin 48px/700 reserved for section titles; Inter V Latin everywhere else.
- Negative tracking of -0.03em on all Inter V Latin text; positive tracking on uppercase nav and Sign In labels.
- Pill-ish buttons: 25.6px radius on the 34px Sign In pill, 24px radius on the 64px Explore Careers and 72px hero buttons.
- 8px-radius news cards on translucent grey `#80808033` with a soft `rgba(10, 10, 10, 0.15) 0px 4px 4px 0px` shadow.
- Angled geometry from clip-paths: parallelogram game cards `polygon(20% 0px, 100% 0px, 80% 100%, 0px 100%)` and a slanted careers photo `polygon(10% 0px, 100% 0px, 100% 100%, 0px 100%)`.

## Colors

> **Source:** all values measured on https://www.riotgames.com/en (desktop 1280px, mobile 390px). Riot publishes no colour specification (see SOURCES.json `_research`).

### Brand & Accent
- **Crimson** (`{colors.primary}` — `#d1363a`): Explore Careers fill, header fist logo, news-card anchor colour. Second most-used text colour on the page by character count (it is the computed colour of the card anchors).
- **Crimson (Sign In)** (`{colors.primary-signin}` — `#d13639`): the exact fill measured on the Sign In pill in the Riot bar. Visually identical to `#d1363a`; the Riot bar is a separate shared component, which is why the value differs by one unit.
- **Gold** (`{colors.gold}` — `#c5b174`): fill and glow of the VALORANT Champions hero "Watch Now" button (`rgb(197, 177, 116)`). Campaign-specific, not a site-wide token.

### Surface
- **Canvas** (`{colors.canvas}` — `#0a0a0a`): hero slides and the "What's happening?" band — the page background the viewer sees from the top of the page to y=1620.
- **Surface Showcase** (`{colors.surface-showcase}` — `#1f1f1f`): the Games / Esports band, padded 100px top and bottom.
- **Surface Header** (`{colors.surface-header}` — `#111111`): the fixed 80px Riot bar.
- **Surface Footer** (`{colors.surface-footer}` — `#252423`): footer inner block; also the `<body>` background.
- **Surface Careers** (`{colors.surface-careers}` — `#ebebeb`): the single light band ("We're hiring!").
- **Surface Main** (`{colors.surface-main}` — `#e7e6e3`): the computed background of `<main>`. It is entirely covered by the bands above and is not visible on the homepage; the same value is the body text colour inherited by the footer.
- **Surface Search** (`{colors.surface-search}` — `#2b2a29`): the search pill in the Riot bar.
- **Fill Card** (`{colors.fill-card}` — `#80808033`, i.e. `rgba(128, 128, 128, 0.2)`): translucent grey fill of news list cards and the SEE MORE button.
- **Fill Card Hover** (`{colors.fill-card-hover}` — `#8080804d`, `rgba(128, 128, 128, 0.3)`): SEE MORE on hover.
- **Fill Stat** (`{colors.fill-stat}` — `#adacaa33`, `rgba(173, 172, 170, 0.2)`): careers stat cards on the light band.

### Text
- **Ink** (`{colors.ink}` — `#f9f9f9`): headings, card titles, button labels and nav links on dark surfaces.
- **Ink White** (`{colors.ink-white}` — `#ffffff`): footer links, search input text; the most frequent text colour by characters.
- **Ink Headline** (`{colors.ink-headline}` — `#f0f0f0`): hero title.
- **Ink Soft** (`{colors.ink-soft}` — `#f9f9f999`, 60% alpha): hero lead paragraph.
- **Ink On Light** (`{colors.ink-on-light}` — `#2b2a29`): default text colour inside `<main>` on light surfaces; also the computed anchor colour of news cards on hover.
- **Ink Muted** (`{colors.ink-muted}` — `#656462`): careers lead and stat labels.
- **Ink Tag** (`{colors.ink-tag}` — `#656462e6`): uppercase "NEWS" category labels.
- **Ink Black** (`{colors.ink-black}` — `#000000`): label on the gold hero button.
- **On Primary** (`{colors.on-primary}` — `#f9f9f9`): Explore Careers label.
- **On Sign In** (`{colors.on-signin}` — `#111111`): the Sign In label — dark text on crimson, not white.

### Semantic
No error, success or warning colours are used on the homepage and Riot publishes none. Do not invent them.

## Typography

### Font Family
- **Riot Sans Latin** — served by riotgames.com via `@font-face` (weight 700 loaded). Per Stink Studios' case study and Design Week (14 Nov 2024), Riot Sans is "the company's Riot Sans typeface by Colophon". The stylesheet also declares localized variants (`Riot Sans Korean`, `Riot Sans Thai`, `Riot Sans JP`, `Riot Sans CN`, `Riot Sans AR`) paired with Noto Sans fallbacks.
- **Inter V Latin** — the content face (weights 400, 600, 700, 800 loaded). Inter is open source under the SIL Open Font License 1.1 (rsms.me/inter).
- **Inter** — the Riot bar (global header) uses the non-variable `Inter` (600, 700) with an `Arial, sans-serif` fallback.
- The search input renders in plain `Arial` 12px/700 uppercase.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|---|
| `{typography.display-section}` | Riot Sans Latin | 48px | 700 | 72px | -1.44px | Section titles on dark bands |
| `{typography.display-section-careers}` | Riot Sans Latin | 48px | 700 | 48px | -1.44px | "We're hiring!" on the light band |
| `{typography.display-section-mobile}` | Riot Sans Latin | 31.008px | 700 | 46.512px | -0.93024px | Section titles at 390px |
| `{typography.heading-feature}` | Inter V Latin | 31.008px | 700 | 37.2096px | -0.93024px | Hero title (h1), feature news title |
| `{typography.heading-feature-mobile}` | Inter V Latin | 27.008px | 700 | 32.4096px | -0.81024px | Hero title at 390px |
| `{typography.stat-number}` | Inter V Latin | 56px | 700 | 67.2px | -0.48px | Careers stat figures |
| `{typography.stat-label}` | Inter V Latin | 24px | 700 | 28.8px | -0.48px | Careers stat labels |
| `{typography.body-lead}` | Inter V Latin | 20px | 400 | 24px | -0.6px | Hero lead |
| `{typography.body-lead-strong}` | Inter V Latin | 20px | 600 | 30px | -0.6px | Careers lead |
| `{typography.heading-card}` | Inter V Latin | 18px | 700 | 25.2px | -0.54px | News list card titles |
| `{typography.body}` | Inter V Latin | 16px | 400 | 24px | -0.48px | Body default |
| `{typography.tag-category}` | Inter V Latin | 15.008px | 800 | 22.512px | -0.45024px | "NEWS" labels (uppercase) |
| `{typography.button-careers}` | Inter V Latin | 20px | 700 | 20px | -0.6px | Explore Careers |
| `{typography.button-see-more}` | Inter V Latin | 13.008px | 800 | 13.008px | -0.39024px | SEE MORE (uppercase) |
| `{typography.nav-link}` | Inter | 13px | 600 | 15.6px | 1.04px | Riot bar links (uppercase) |
| `{typography.nav-link-mobile}` | Inter | 16px | 600 | 24px | 1.28px | Mobile drawer links (uppercase) |
| `{typography.button-signin}` | Inter | 12px | 600 | — | 0.96px | Sign In (uppercase) |
| `{typography.footer-link}` | Inter V Latin | 11px | 800 | 16.5px | -0.33px | Footer links (uppercase) |
| `{typography.footer-legal}` | Inter V Latin | 11.008px | 400 | 16.512px | -0.48px | Footer legal text |

### Principles
- **Riot Sans is a title face only.** On the homepage it appears exclusively in section h2s. The hero h1 and every card title are Inter V Latin 700.
- **Negative tracking everywhere in Inter V Latin.** The site applies -0.03em: -0.48px at 16px, -0.54px at 18px, -0.6px at 20px, -0.93024px at 31.008px, -1.44px at 48px (Riot Sans).
- **Uppercase labels flip to positive tracking** in the Riot bar: 1.04px on 13px nav links, 0.96px on the 12px Sign In label, 1.28px on 16px mobile drawer links. Footer and SEE MORE uppercase labels keep negative tracking (-0.33px, -0.39024px).
- **Heavy weights for labels.** Category tags, footer links and SEE MORE use weight 800; headings 700; body 400; leads 400 or 600.
- **Fractional sizes are real.** 31.008px, 15.008px, 13.008px and 11.008px come from rem math in the site CSS; reproduce them exactly.

### Note on Font Substitutes
Riot Sans is proprietary to Riot Games and is not distributed. The site's own fallback stack is `Arial, sans-serif`; use that for Riot Sans titles when the font is unavailable, keeping weight 700 and -1.44px tracking at 48px. Inter V Latin is a Latin-subset build of Inter, which is free under the SIL OFL 1.1 — load Inter (variable) directly for a faithful match.

## Layout

### Spacing System
- **Tokens (measured gaps and paddings):** `{spacing.xs}` 8px · `{spacing.sm}` 10px · `{spacing.md}` 16px · `{spacing.stat}` 20px · `{spacing.lg}` 24px · `{spacing.xl}` 32px · `{spacing.xxl}` 48px · `{spacing.careers-y}` 80px · `{spacing.section-y}` 100px.
- 8px is the most frequent gap (between news list cards and inside card meta rows).
- 10px is the most frequent padding (footer link hit areas: `padding: 10px`).
- Section bands ("What's happening?", content showcase) are padded `100px 0px`.
- The careers text column is padded `80px 30px`.
- Stat cards are padded 20px.

### Grid & Container
- Desktop is measured at 1280px. The news band is a two-column composition: the feature card is 658px wide (image 658×370) and the list column holds four 438×134 cards stacked with 8px gaps — visible in the capture as the large card left, four small cards right.
- The Games carousel (Embla) shows a centre card of 393×660 with neighbours progressively scaled down (e.g. `matrix(0.964265, 0, 0, 0.964265, 0, 2.27331)`, then `0.92853`, `0.892795`, `0.85706`, `0.821434`) — a fan of parallelograms receding to both sides.
- The careers band is split: a 609.53px text column on the left and a 670.47px photo column on the right with an angled left edge.
- The footer is a single row of uppercase links plus social icons, with a lower legal row ("Cookie Preferences", copyright, "TO THE SURFACE").

### Whitespace Philosophy
Generous vertical bands (100px top and bottom) with dense content inside. Cards sit tight (8px gaps) so the key art reads as one mosaic. The hero leaves the right half of the slide to the campaign illustration; title, lead and CTA stack in the left-centre column (h1 width 560px).

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Bands, header, footer |
| 1 | `rgba(10, 10, 10, 0.15) 0px 4px 4px 0px` | News feature image and news list cards |
| 2 | `rgba(197, 177, 116, 0.25) 0px 10px 45px -10px, rgba(197, 177, 116, 0.5) 0px 0px 20px -10px, rgba(197, 177, 116, 0.35) 0px 10px 30px -10px` | Gold hero CTA glow (campaign-coloured) |
| — | `rgb(249, 249, 249) 0px 0px 0px 1px inset` | 1px inset ring measured once on the page |

### Decorative Depth
Depth comes from art, not shadows: full-bleed key art in the hero, a dim red radial glow behind the news band (visible in the capture as the reddish tint around rgb(19, 11, 12)), large dark brush-shape graphics behind the Games band, and the scaled, receding parallelogram carousel. Fixed header `#111111` sits above everything with no shadow.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 6.4px | Globe (language) icon button in the Riot bar |
| `{rounded.see-more}` | 6.5px | SEE MORE button |
| `{rounded.card}` | 8px | News cards, careers stat cards |
| `{rounded.cta}` | 24px | Explore Careers, hero CTA |
| `{rounded.signin}` | 25.6px | Sign In pill, search pill |
| `{rounded.search-inner}` | 32px | Inner search element in the Riot bar |
| `{rounded.circle}` | 50% | Game icon avatars in news cards |

### Angles and Clip-Paths
Riot's angular brand language (the fist mark, the "core to expressive" pattern toolkit described by Stink Studios) shows on the homepage through clip-paths rather than border-radius:
- **Game cards:** `clip-path: polygon(20% 0px, 100% 0px, 80% 100%, 0px 100%)` — a parallelogram leaning right, 393×660 at full scale.
- **Careers photo:** `clip-path: polygon(10% 0px, 100% 0px, 100% 100%, 0px 100%)` — a slanted left edge against the light band.
Game cards have no border-radius (0px); keep the hard corners.

### Imagery
Imagery is franchise key art: painted splash art, 3D renders, esports stage photography and game logos (LEAGUE of LEGENDS, VALORANT, RIFTBOUND, TFT). News thumbnails are cropped landscape images inside 8px-radius cards; small circular game icons (50%) mark which franchise a story belongs to.

## Components

### Buttons

**`button-primary`** — Sign In pill in the Riot bar (detected primary CTA).
- Background `{colors.primary-signin}` `#d13639`, text `{colors.on-signin}` `#111111`, `{typography.button-signin}` (Inter 12px/600, 0.96px tracking, uppercase).
- Padding 9.6px 22.4px, height 34px, radius `{rounded.signin}` 25.6px.

**`button-careers`** — the large crimson CTA ("Explore Careers").
- Background `{colors.primary}` `#d1363a`, text `{colors.on-primary}` `#f9f9f9`, `{typography.button-careers}` (20px/700, line-height 20px, -0.6px).
- Padding 22px 16px, height 64px, width 260px (358px full-width at 390px), radius `{rounded.cta}` 24px.

**`button-see-more`** — compact ghost-grey button beside section titles.
- Background `{colors.fill-card}` `#80808033`, text `#f9f9f9`, `{typography.button-see-more}` uppercase, padding 8px 12px, height 29px, radius 6.5px.
- Hover `button-see-more-hover`: background `{colors.fill-card-hover}` `#8080804d` (measured `rgba(128, 128, 128, 0.2)` → `rgba(128, 128, 128, 0.3)`).

**`button-hero-watch`** — campaign CTA on the VALORANT Champions slide.
- Gold gradient `linear-gradient(135deg, rgb(197, 177, 116) 20%, rgb(197, 177, 116) 100%)`, label `#000000` in `{typography.heading-feature}` (31.008px/700), padding 12px, height 72px, radius 24px, with a round black play icon at the left.
- Glow shadow (Level 2). On hover the shadow tightens to `rgba(197, 177, 116, 0.25) 0px 10px 30px -10px, rgba(197, 177, 116, 0.5) 0px 10px 30px -10px, rgba(197, 177, 116, 0.5) 0px 10px 35px -10px`.
- The other hero slide (Legends of Runeterra) used a teal "Play Now" button of the same shape: the hero CTA colour follows the campaign.

### Cards

**`card-news-feature`** — large story on the left of "What's happening?".
- Image 658×370, radius 8px, Level 1 shadow. Title below in `{typography.heading-feature}` `#f9f9f9`, then a meta row with a 50% game icon and a "NEWS" tag.

**`card-news-list`** — compact story card.
- 438×134, background `{colors.fill-card}`, radius 8px, Level 1 shadow. Title `{typography.heading-card}` (18px/700, 2 lines, ellipsis), meta row (icon + "NEWS"), landscape thumbnail on the right half.
- Hover `card-news-list-hover`: measured `text-decoration: underline`; the anchor's computed colour moves from `#d1363a` to `#2b2a29`.

**`tag-category`** — "NEWS" label: `{typography.tag-category}` uppercase in `{colors.ink-tag}` `#656462e6`.

**`card-stat`** — careers figures ("165 Open positions", "24 Offices").
- Background `{colors.fill-stat}`, radius 8px, padding 20px, 262.77×135.98. Number `{typography.stat-number}` in `#0a0a0a`, label `{typography.stat-label}` in `#656462`.

**`card-game`** — Games carousel item.
- Parallelogram clip-path `polygon(20% 0px, 100% 0px, 80% 100%, 0px 100%)`, 393×660, full-bleed key art with the game logo near the top and platform icons at the bottom.

### Navigation

**`nav`** — the Riot bar (global header shared across Riot sites).
- Fixed, 80px tall, background `{colors.surface-header}` `#111111`.
- Left: Riot Games fist logo (crimson), a secondary circular icon, then links "WHO WE ARE · WORK WITH US · NEWS" in `{typography.nav-link}` `#f9f9f9`.
- Right: globe icon button (radius 6.4px), the search pill (`search-field`) and the Sign In pill.
- Mobile drawer links: `{typography.nav-link-mobile}`, padding 12px 18px, 48px tall.

**`search-field`** — pill with background `{colors.surface-search}` `#2b2a29`, radius 25.6px, padding 4.8px 22.4px, height 34.59px; input text Arial 12px/700 uppercase `#ffffff` with "SEARCH" placeholder and a magnifier icon at the right.

**`link`** — anchors default to `{colors.primary}` `#d1363a` in `{typography.body}`.

### Footer

**`footer`** — background `{colors.surface-footer}` `#252423`, padding 0px 20px 20px, 237px tall.
- Links `{typography.footer-link}` (11px/800, uppercase, -0.33px) in `#ffffff` with 10px padding: PRESS, SECURITY, LEGAL, LEADERSHIP, CANDIDATE PRIVACY, TERMS OF SERVICE, PRIVACY NOTICE, PLAYER SUPPORT, E-VERIFY, ACCESSIBILITY, ANNUAL REPORTS, PEERING INFORMATION, COMMUNITY PACT.
- Social icons (X, Instagram, TikTok, LinkedIn, Facebook, YouTube) at the right; legal row in `{typography.footer-legal}`.

## Design System Architecture

Riot Games publishes **no public corporate design system**, token package or written colour/type specification. Searches (recorded in SOURCES.json) found only:
- the official press page https://www.riotgames.com/en/press, which offers logo ZIPs (Riot Logos for Print in CMYK, Riot Logos for Web in RGB, and per-game logo packs) and no guidelines;
- the agency case study https://stinkstudios.com/work/riot-games-brand-evolution and Design Week's report https://www.designweek.co.uk/how-stink-studios-channelled-its-gamer-energy-into-riot-games-rebrand/, which describe the 2024 brand system in prose only.

### What the official sources say
- **Brand toolkit model:** Stink Studios describes a system on "a scale from core to expressive". The core style "represents the foundations of the brand and uses the company's Riot Sans typeface by Colophon" ([Stink Studios](https://stinkstudios.com/work/riot-games-brand-evolution)).
- **Logo:** the fist-bump logo, animated logos and custom fists were designed by Ilovedust ([Design Week](https://www.designweek.co.uk/how-stink-studios-channelled-its-gamer-energy-into-riot-games-rebrand/)).
- **Patterns:** pattern sets drawn from game effects function as "graphics, frames, masks, dividers, animated textures" ([Stink Studios](https://stinkstudios.com/work/riot-games-brand-evolution)).
- **Colour:** "a new expressive colour palette that draws from the familiar tones of maps and environments in each world" — no values published.
- No source documents a token hierarchy, theming modes, spacing grid, component inventory, accessibility mandate or package delivery. Those are therefore not described here as Riot's.

### The de-facto system measurable on riotgames.com
- **Two shells:** the global **Riot bar** (classes such as `riotbar-header`, `riotbar-mobile-menu`, with hashed CSS-module prefixes) uses `Inter`, a 25.6px pill radius and `#d13639`; the page content uses `Inter V Latin`, BEM-style blocks (`hero-carousel__slide`, `content-showcase__main__slide__logo`, `whats-happening`, `footer__inner`) and utility modifiers (`widget--spacing-padding-large`, `l-col-three`).
- **No CSS custom-property tokens for the brand:** the only `:root` variables on the page belong to the Osano cookie-consent widget (`--osano-*`). Brand colours are hard-coded values repeated through the CSS: `#e7e6e3` (139 uses), `#d1363a` (115), `#2b2a29` (89), `#f9f9f9` (59).
- **Spacing modifier:** `widget--spacing-padding-large` resolves to `padding: 100px 0px` on section bands.
- **Localisation:** the stylesheet declares per-script font pairs (Riot Sans Korean/Thai/JP/CN/AR with Noto Sans equivalents), so the type system is designed for many locales.
- **Third-party UI:** the carousel is Embla (`embla__container`, `embla__slide`); the cookie banner is Osano.

## Do's and Don'ts

### Do
- Use near-black `#0a0a0a` as the canvas and `#1f1f1f` for the alternating band; keep the header `#111111` and footer `#252423`.
- Reserve crimson `#d1363a` for primary pill CTAs, the fist logo and links.
- Put dark `#111111` text on the crimson Sign In pill, and `#f9f9f9` text on the larger Explore Careers button — exactly as measured.
- Set section titles in Riot Sans Latin 48px/700 with -1.44px tracking; everything else in Inter V Latin with -0.03em tracking.
- Let franchise key art provide the colour; match a hero CTA to its campaign (gold for VALORANT Champions, teal for Legends of Runeterra).
- Use 8px radius for cards and 24px / 25.6px for buttons.
- Cut game tiles as parallelograms with `polygon(20% 0px, 100% 0px, 80% 100%, 0px 100%)`.
- Keep uppercase labels heavy (600–800) and small (11–15.008px).

### Don't
- Don't use pure `#000000` as a page surface; it appears only as a label colour on the gold button.
- Don't set the hero h1 or card titles in Riot Sans — on this site they are Inter V Latin 700.
- Don't introduce a second brand accent or semantic colours; none are used or published.
- Don't round the game cards; their geometry is the clip-path.
- Don't use positive tracking on Inter V Latin body or headings — only the Riot bar's uppercase labels track open.
- Don't show `#e7e6e3` as a page background; it is the hidden `<main>` fill and a text colour.
- Don't add heavy drop shadows; the only card shadow is `rgba(10, 10, 10, 0.15) 0px 4px 4px 0px`.

## Responsive Behavior

Measured at 1280px (desktop) and 390px (mobile). Intermediate breakpoints were not measured and are not declared.

### Mobile (390px) changes
| Element | Desktop | Mobile |
|---|---|---|
| Hero title (h1) | 31.008px / 37.2096px, -0.93024px | 27.008px / 32.4096px, -0.81024px |
| Section title (h2, Riot Sans) | 48px / 72px, -1.44px | 31.008px / 46.512px, -0.93024px |
| Explore Careers | 260px wide, 64px tall | 358px wide (full width), 64px tall |

### Touch Targets

### Collapsing Strategy
- The careers lead at 390px keeps 20px/600 with a 30px line-height and `#656462` colour.
- Body text stays at 16px across widths; 18px card titles remain in the mobile size table.
- The footer nav becomes a vertical list (nav height grows from 73px to 535px).

### Image Behavior
Key art is full-bleed in the hero and inside clipped game cards; news thumbnails crop inside their 8px-radius cards.

## Iteration Guide

1. Start every page on `{colors.canvas}` `#0a0a0a`; alternate bands with `{colors.surface-showcase}` `#1f1f1f`, and use `{colors.surface-careers}` `#ebebeb` only for a deliberate light interlude.
2. Build the header first: 80px `{colors.surface-header}` bar, uppercase `{typography.nav-link}` links, search pill, crimson Sign In pill (`button-primary`).
3. Use `{typography.display-section}` (Riot Sans Latin) for section titles and `{typography.heading-feature}` for hero and feature titles.
4. Body is `{typography.body}` 16px/400/24px with -0.48px tracking.
5. News: one `card-news-feature` + four `card-news-list` with 8px gaps; tag with `tag-category`.
6. Games: `card-game` parallelograms in a carousel; no border-radius.
7. Primary action on light or dark bands: `button-careers` (`#d1363a`, 24px radius, 64px tall).
8. Never invent hover colours: only `button-see-more-hover`, `button-hero-watch-hover` and `card-news-list-hover` are measured.
9. Re-measure the hero before reusing its CTA colour — it changes with each campaign.
10. Run `node web/scripts/verify-designs.mjs --slug=riot-games` after edits.
