---
version: alpha
name: FIFA
category: "Sports & Fitness"
description: "FIFA (fifa.com/en) is a pale blue-grey #eef2fb news-and-tournaments portal set in FIFASans with Poppins and Noto Sans fallbacks, deep navy #03122b text, a #045694 FIFA-blue header, a navy #020f2a hero and footer, white 100px-radius 'Read more' pills and 5px-radius story cards."
colors:
  canvas: "#eef2fb"
  page-body: "#e4e8f0"
  ink: "#03122b"
  primary: "#045694"
  on-primary: "#ffffff"
  surface-white: "#ffffff"
  ink-secondary: "#505b73"
  ink-on-dark-muted: "#ffffffb3"
  black: "#000000"
  card-tint: "#1021391a"
  page-dark: "#020f2a"
  navy: "#102139"
  blue-deep: "#044a80"
  accent-blue: "#0a84ff"
typography:
  display:
    fontFamily: "\"FIFASans Regular\", \"Poppins Regular\", \"Noto Sans Regular\", \"Twemoji Country Flags\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
  body:
    fontFamily: "\"FIFASans Regular\", \"Poppins Regular\", \"Noto Sans Regular\", \"Twemoji Country Flags\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"FIFASans Regular\", \"Poppins Regular\", \"Noto Sans Regular\", \"Twemoji Country Flags\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"FIFASans Regular\", \"Poppins 500\", \"Noto Sans Regular\", \"Twemoji Country Flags\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px
  link:
    fontFamily: "\"Twemoji Country Flags\", \"FIFASans Regular\", \"Poppins Regular\", \"Noto Sans Regular\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button-secondary:
    fontFamily: "\"FIFASans Regular\", \"Poppins 500\", \"Noto Sans Regular\", \"Twemoji Country Flags\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 30px
  xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 23px
components:
  button-primary:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.page-body}"
  language-button:
    textColor: "{colors.surface-white}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 4px 4px 4px 8px
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface-white}"
  nav-link:
    textColor: "{colors.surface-white}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
  card:
    backgroundColor: "{colors.card-tint}"
    textColor: "{colors.surface-white}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.page-dark}"
    textColor: "{colors.surface-white}"
---

# FIFA

## Overview

https://www.fifa.com/en (title "FIFA | The Home of Football", `lang="en"`) is FIFA's fan-facing portal for tournaments, news, rankings and video. It was measured at 1280px wide (scroll height 9891px) and 390px for the mobile pass. The extractor hid a blurred pop-up scrim (`pop-up_blurBackground`); a promotional "The FIFA U-20 World Cup 2027™ brand is on!" modal remains visible over the hero in the capture even after a re-extraction, and it is not documented here as brand UI.

The page opens with a two-tier header: a thin utility row (FIFA REWARDS, FIFA+, FIFA STORE, FIFA COLLECT, an "English" language button) and a main bar in FIFA blue `#045694` with the FIFA wordmark and uppercase menus (TOURNAMENTS & EVENTS, MATCHES & STATS, NEWS, RANKINGS, MORE). A row of circular team and tournament thumbnails sits above a dark navy hero: a large photograph on the right and, on the left, a small tournament eyebrow, a 24px white headline ("Sam Mewis: There was never another path for me and Kristie"), a 14px summary and a white "Read more" pill. Three secondary story teasers sit under the hero.

Below, the page switches to a pale `#eef2fb` canvas and runs as a sports newsroom: "Follow the U-17 Women's World Cup" fixture cards with kick-off times and flags, a horizontal "Moments" photo rail, a "Top stories" block (one large story plus a long list of thumbnail headlines), "Experience FIFA's tournaments" ticket and hospitality cards, the FIFA/Coca-Cola World Rankings tables, "What FIFA does", "Inside FIFA", a magenta "Welcome to Play Zone" game panel, a "FIFA Sound" panel, "Upcoming tournaments & events" and a navy footer with sponsor logos. Headlines are factual and name-driven; imagery is match photography, team crests and tournament key art.

## Colors

- **Canvas `#eef2fb`** — the largest measured background area (18270 area weight); the light content background below the hero.
- **Page body `#e4e8f0`** — the body/main background reported by the extractor, the hover fill of the "Read more" pill, and the most common border colour (176 elements).
- **Ink `#03122b`** — the most-read text (5046 chars); declared as `--Color-Primary-950`.
- **Primary `#045694`** — FIFA blue, declared as `--fcds-blue`; the main header bar (960 area weight) and blue link text (363 chars, e.g. "See all"). **On-primary `#ffffff`** is the header text.
- **Surface white `#ffffff`** — fixture cards, ranking tables and the "Read more" pill (4638 area weight).
- **Ink secondary `#505b73`** — metadata, eyebrows and secondary copy (3792 chars).
- **Ink on dark muted `#ffffffb3`** — 70% white for secondary text on navy.
- **Page dark `#020f2a`** — the `<body>` background, visible behind the hero and in the footer.
- **Navy `#102139`** and **blue deep `#044a80`** — dark panels and header details (635 and 51 area weight).
- **Card tint `#1021391a`** — a 10% navy wash used on card placeholders (4077 area weight).
- **Accent blue `#0a84ff`** — `--Color-Primary-600`, measured on 14 characters of link text.
- **Black `#000000`** — a small amount of text (20 chars).

The design-token layer also declares a full primary blue scale (`--Color-Primary-50` `#edf9ff` to `--Color-Primary-950` `#03122b`, with `--Color-Primary-800` `#004bd5` as `--Color-Foreground-Accent`), error `#bf1140`, warning `#bb4e02` and a yellow `--fcds-yellow` `#fc0`.

## Typography

The brand face is **FIFASans**, loaded as "FIFASans Regular" and declared in the token layer as "Fifa Sans" for every role (`--Typography-FontFamily-Display1` through `--Typography-FontFamily-Body`). Stacks fall back to Poppins, Noto Sans, a Twemoji Country Flags font (for flag emoji in team names), Helvetica Neue and Arial. 10726 measured characters are FIFASans; 839 are rendered through the Twemoji flag stack.

- **Display / story headline** — 24px/31.2px, weight 400 (the hero headline and the largest story titles).
- **Section headings** — 32px weight 400 in `#03122b` ("Follow the U-17 Women's World Cup", "Top stories", "Experience FIFA's tournaments").
- **List headlines** — 20px (1280 chars).
- **Body** — 14px/24px weight 400.
- **Labels and metadata** — 12px, the most common size (6807 chars); the nav uses 12px/19.2px.
- **Buttons** — 16px/24px weight 400 for "Read more"; 16px/18.4px for the language button.

Weights: 400 (8564 chars), 500 (2968) and a trace of 600. Headlines stay at regular weight; the visual weight comes from the dark ink and photography. If FIFASans is unavailable, use the site's own fallback order: Poppins, then Noto Sans.

## Layout

The desktop layout is a centred content column on the 1280px viewport with full-width coloured bands for the header, hero and footer. The token layer declares a 12-column grid at large sizes with 24px gutters and 40px margins (`--Breakpoint-Large-Columns`, `--Breakpoint-Large-Gutter`, `--Breakpoint-Large-Margin`), 16px gutters at medium and small sizes and 4 columns at extra-small. A `--base-gap` of 24px is declared.

Measured spacing is tight and regular: gaps of 8px (550 instances), 4px (208), 16px (151) and 12px (104); paddings of 16px (173), 12px (68), 24px (52) and 40px (15). Fixture cards sit three across; the tournament cards three across; the rankings two tables side by side; "Top stories" splits into one wide feature and a narrow list. Horizontal rails (team circles, moments, upcoming events) scroll sideways.

## Elevation & Depth

No box shadows were measured on the rendered home page. Depth comes from the contrast between the navy hero/footer and the pale canvas, from white cards on `#eef2fb`, and from `#e4e8f0` 1px borders. The token layer declares two shadows for elevated surfaces — `--fcds-shadow-level-2` (`0px 8px 24px #000f2c29`) and `--fcds-shadow-level-3` (`0px 16px 32px #000f2c29`) — plus scrim colours `--Color-Background-Scrim` `#0000004d` and `--Color-Background-ShadowIntense` `#00000080`; none was measured on a home-page element. Menu buttons get a `rgba(255, 255, 255, 0.1)` wash on hover rather than a lift.

## Shapes

Measured radii: 5px (163 elements — story thumbnails and cards), 50% (83 — the circular team and tournament badges), 8px (16 — larger cards), 4px (12 — nav links and the language button), one 30px and one 100px (the "Read more" pill). The token layer declares `--fcds-corner-radius-4` 0.25rem and `--BorderRadius-16` 16px. The overall shape language is small radii on rectangles, full circles for crests and pills for the main calls to action.

## Components

**Read more pill (primary CTA)** — white fill, `#03122b` FIFASans 16px/24px text, 100px radius, `12px 20px` padding, 48px tall; hover fills it with `#e4e8f0`.

**Header** — 104px overall on desktop; utility links in FIFASans 12px/19.2px white with `4px 8px` padding and 4px radius; menu buttons uppercase and white, gaining a 10% white wash on hover. Eight header links were visible on desktop.

**Language button** — "English", transparent, white 16px/18.4px text, 4px radius, `4px 4px 4px 8px` padding, 36px tall.

**Team circle rail** — 50%-radius crest thumbnails with 12px labels, linking to team pages ("All U17WWC Teams").

**Fixture card** — white card with competition and group in 12px `#505b73`, team names with flags, and a large kick-off time.

**Story list item** — 5px-radius thumbnail on the left, a 12px tournament eyebrow and a 20px headline on the right.

**Rankings table** — white panels with rank, flag, team, points and +/− columns, each closed by a pill link ("Latest official Men's World Ranking", "FOLLOW LIVE WOMEN'S RANKING").

**Footer** — `#020f2a` band with the white FIFA wordmark, social icons, app-store badges, sponsor logos and small legal links.

## Design System Architecture

No public FIFA design system or brand guideline site was found. The page opened, https://inside.fifa.com/about-fifa, links no brand guidelines, media kit, typefaces or design system.

The shipped CSS exposes a de-facto token architecture in two layers. The newer layer uses Figma-style names: `--Color-Primary-50` … `--Color-Primary-950`, `--Color-Neutral-*`, `--Color-Secondary-Red-*` / `-Yellow-*` / `-Green-*`, semantic roles (`--Color-Foreground-Primary`, `--Color-Foreground-Accent`, `--Color-Background-Inverse` `#0244a6`, `--Color-Background-AccentAlt` `#03122b`), `--Typography-FontFamily-*` / `--Typography-FontSize-*` / `--Typography-LineHeight-*` per breakpoint (e.g. `--Typography-LineHeight-Desktop-Display1` 106px, `--Typography-FontSize-Tablet-Heading2` 32px), `--Spacing-*`, `--Sizing-*` and `--Breakpoint-*` grid values. An older `--fcds-*` layer holds named brand colours (`--fcds-blue` `#045694`, `--fcds-yellow`, `--fcds-medium-purple` `#d549a9`), line heights, letter spacing, corner radii and shadow levels. A third-party `--storyteller-*` set belongs to the embedded stories widget, and OneTrust/Osano-style consent variables are not brand tokens.

## Do's and Don'ts

**Do**
- Use FIFA blue `#045694` for the header and links, and deep navy `#03122b` for text.
- Keep the content canvas pale blue-grey (`#eef2fb`) with white cards.
- Set headlines in FIFASans at regular weight; let size and photography provide emphasis.
- Use 5px radii on story cards, full circles for team crests and a 100px pill for "Read more".
- Show flags next to every team name.

**Don't**
- Don't use the promotional pop-up or its scrim as a pattern for page UI.
- Don't use heavy drop shadows on cards; none were measured.
- Don't bold the headlines or switch to a condensed sports face.
- Don't treat `--storyteller-*` or consent-banner variables as brand colours.

## Responsive Behavior

Measured at 390px wide:

- The header becomes a 64px `#045694` bar with two visible header links and a menu toggle; desktop showed eight header links.
- The hero headline stays 24px/31.2px but wraps to more lines (94px tall vs 62px).
- The "Read more" pill keeps its desktop spec (16px, 100px radius, `12px 20px`, 48px).
- "FIFA/Coca-Cola World Rankings" measured as a 24px/26.4px heading in "FIFASans Medium".
- A 12px/18px weight-500 tournament line was the main body sample.
- Font sizes in use on mobile are 12px, 16px, 14px, 10px, 24px and 20px.

The token layer declares separate mobile, tablet and desktop type sizes; behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Set the page on `#eef2fb` with `#03122b` text in FIFASans (fallback Poppins, Noto Sans).
2. Build a `#045694` header with white 12px utility links and uppercase menus that take a 10% white wash on hover.
3. Lead with a dark navy hero: photo right, 24px/31.2px white headline left, a white 100px-radius "Read more" pill (48px tall, `12px 20px`).
4. Add rails of 50%-radius crests and 5px-radius story thumbnails with 12px `#505b73` eyebrows.
5. Use white cards on the pale canvas with `#e4e8f0` borders; section headings at 32px regular weight.
6. Close with a `#020f2a` footer carrying the wordmark, partners and legal links.
7. Check: no shadows on cards, flags beside team names, no pop-up styling in page components.
