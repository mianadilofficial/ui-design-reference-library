---
version: alpha
name: Manchester City
category: "Sports & Fitness"
description: "Manchester City (mancity.com) is a white #ffffff club site in the Kippax, Kippax Modern and KippaxCondensed typefaces, with dark-blue #001838 ink, a sky-blue #98c5e9 header, electric-yellow #e6ff00 square BUY TICKETS buttons, #dde6ed neutral panels, uppercase condensed 40px headlines and a #001838 footer."
colors:
  canvas: "#ffffff"
  ink: "#001838"
  primary: "#e6ff00"
  on-primary: "#001838"
  primary-hover: "#e3ff86"
  surface-neutral: "#dde6ed"
  surface-light: "#f3f6f9"
  sky-blue: "#6caddf"
  header-sky: "#98c5e9"
  ink-muted: "#69738c"
  ink-subtle: "#8898af"
  electric-blue: "#3bd6ff"
  electric-blue-deep: "#01375b"
  dark-blue-deep: "#010b1d"
typography:
  display:
    fontFamily: KippaxCondensed, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: 0.4px
    textTransform: uppercase
  subheading:
    fontFamily: Kippax, sans-serif
    fontSize: 17px
    fontWeight: 700
    lineHeight: 21px
    letterSpacing: 0.33px
  body:
    fontFamily: Kippax, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
  button:
    fontFamily: Kippax, sans-serif
    fontSize: 13px
    fontWeight: 700
    lineHeight: 17px
    letterSpacing: 0.14px
    textTransform: uppercase
  nav:
    fontFamily: Kippax, sans-serif
    fontSize: 14px
    fontWeight: 400
  link:
    fontFamily: "\"Kippax Modern\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 17px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 12px 13px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 44px
    borderColor: "{colors.ink}"
  button-secondary-hover:
    backgroundColor: "{colors.surface-light}"
  sign-in-pill:
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    padding: 4px 12px 4px 4px
    height: 44px
    border: "1px solid #ffffff80"
  link:
    textColor: "{colors.electric-blue}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.header-sky}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# Manchester City

## Overview

The measured site is the club's official home page, https://www.mancity.com/ (title "Manchester City FC - Official Website of Man City F.C..", `lang="en"`), captured at 1280px wide with a 5312px scroll height. A OneTrust cookie scrim was hidden by the extractor. The 390px mobile pass did not reach the site: it captured a "REDIRECTING..." page with a Cloudflare "Verify you are human" check, so no mobile measurements are used here.

The desktop page is a compact club newsroom. A 90px pale-grey strip at the top holds a sponsor display banner (a property advertisement, not club UI). Below it, a 102px sky-blue (`#98c5e9`) header carries the round club crest, the menus News, Video, Fixtures, Tickets, Shop, Players, Club and More (with chevrons), a search icon, a "Sign in" pill, a basket icon and a partner logo. The content column then opens with a dark-blue video hero ("INSIDE CITY 530: LIVERPOOL AND PSG THRILLERS!" in white condensed capitals beside a player photograph and a play button), followed by a grid of news thumbnails and, on the right, fixture cards ("NEXT FIXTURE", "LAST RESULT") with crests, kick-off times and square buttons (PREVIEW, BUY TICKETS, MATCH REPORT). Further sections repeat the pattern under huge condensed headings — "WOMEN'S TEAM", "EDS & ACADEMY", "FEATURES", "OUR PARTNERS" — with a CITY+ full-match-replay hero, "MORE NEWS" / "MORE VIDEO" bar buttons and grey placeholder panels for partner content. The page ends in a 485px sky-blue `#6caddf` band and a 295px dark-blue `#001838` footer with crest, language switcher, social icons and legal links.

Copy is short and reporter-like: "Maresca says Haaland and team-mates will need rest", "Training: Ready to welcome the Tractor Boys!". Each headline sits over a small grey category label (MEN'S TEAM, WOMEN'S TEAM, PICTURE SPECIAL, INTERVIEWS).

## Colors

- **Canvas `#ffffff`** — the page background (`canvas` role) behind the content column.
- **Ink `#001838`** — the most-read text (1482 chars) and the footer fill; declared as `--colour-city-dark-blue-900`.
- **Primary `#e6ff00`** — electric yellow (`--colour-city-electric-yellow-500`), the fill and border of every BUY TICKETS button; text on it is `#001838`. Hover lightens it to `#e3ff86`.
- **Surface neutral `#dde6ed`** — `--colour-city-neutral-100`, the largest background area (1218) — the partner placeholder panels and light section blocks.
- **Surface light `#f3f6f9`** — section backgrounds (553 area) and the hover fill of the white outlined buttons.
- **Header sky `#98c5e9`** — `--colour-city-sky-blue-400`, the header band.
- **Sky blue `#6caddf`** — `--colour-city-sky-blue-500`, the large band above the footer.
- **Ink muted `#69738c`** (`--colour-city-neutral-500`) — category labels and metadata (291 chars).
- **Ink subtle `#8898af`** (`--colour-city-neutral-400`) — lighter metadata.
- **Electric blue `#3bd6ff`** (`--colour-city-electric-blue-500`) — small accent text and the "Sign in" tag on the hero.
- **Electric blue deep `#01375b`** (`--colour-city-electric-blue-900`) — the "EN" language button fill.
- **Dark blue deep `#010b1d`** (`--colour-city-dark-blue-950`) — the darkest measured panel fill (354 area weight).

The token layer also declares purple, electric-pink, orange and green scales plus global success, warning (`#fbd84a` to `#b65c02`) and error (`#d60007`) colours; none was measured as a page colour on the home page. `--colour-palermo-*` variables belong to a separate palette in the same stylesheet.

## Typography

Three custom families, all served by the site: **Kippax** (400, 700), **Kippax Modern** (400, 500, 700) and **KippaxCondensed** (700).

- **Display** — KippaxCondensed 40px/40px, weight 700, +0.4px, uppercase: the hero headline. Section headings ("WOMEN'S TEAM", "EDS & ACADEMY", "FEATURES") measured 60px, and fixture scores 31px and 33px.
- **Subheading** — Kippax 17px/21px, weight 700, +0.33px: the news-card headlines, and the most-used size on the page (1062 chars).
- **Body / labels** — Kippax 12px/16px, weight 400; category labels use 12px with +0.3px tracking.
- **Button** — Kippax 13px/17px, weight 700, +0.14px, uppercase.
- **Nav** — Kippax 14px weight 400 for the header links.
- **Link / UI text** — Kippax Modern 14px/20px weight 500; the header and "Sign in" use Kippax Modern 14–16px weight 700.

Weight 700 dominates (1565 chars against 471 at 400). The look is a sturdy grotesque for reading with a tall condensed face for shouting. If the Kippax faces are unavailable, use a condensed sans such as Oswald or Barlow Condensed for display and a sturdy grotesque such as Inter or Barlow for text.

## Layout

The content sits in a centred column of about 976px inside the 1280px viewport (the measured hero link is 976px wide), leaving wide white margins. The main band (4188px) is laid out up to four columns: a hero spanning three quarters with the fixture rail in the last quarter, then rows of four thumbnails. Measured bands: 90px sponsor strip (`#ebedf0`), 102px header (`#98c5e9`), 4188px white content, a 150px media strip, the 485px `#6caddf` band and the 295px `#001838` footer.

Spacing tokens are declared in rem (`--spacing-4` 0.5rem, `--spacing-6` 1rem, `--spacing-8` 1.5rem, `--spacing-12` 4rem). Measured paddings are dominated by 10px (96 instances), then 12px and 24px; gaps by 4px, 2px, 12px and 48px. Fourteen header links were visible on desktop, with no menu toggle.

## Elevation & Depth

Elevation is minimal. Two shadows were measured, each once: `rgba(0, 24, 56, 0.2) 0px 8px 16px 0px` and `rgba(0, 24, 56, 0.3) 0px 8px 16px 0px` — both tinted with the club's dark blue rather than black. Most separation comes from colour: the sky-blue header, white content, `#dde6ed` panels and the dark-blue footer. Fixture cards are framed by a thin top rule and white fill, and section CTAs sit on a full-width horizontal rule.

## Shapes

The club's interface is square. Buttons (BUY TICKETS, PREVIEW, MATCH REPORT, MORE NEWS) have 0px radius. Measured non-zero radii are 9999px (12 elements — the "Sign in" pill and language button), 50% (11 — crests and the circular play button) and 4px (7 — small tags). The token layer declares a full radius scale (`--border-radius-xsmall` 0.125rem, `small` 0.25rem, `medium` 0.375rem, `large` 0.5rem, `xlarge` 0.75rem, `xxlarge` 1rem, `round` 624.9375rem), but the home page uses square corners almost everywhere.

## Components

**Primary button (BUY TICKETS)** — `#e6ff00` fill with a matching 1px border, `#001838` Kippax 13px/17px weight 700 uppercase text, 0px radius, `12px 12px 13px` padding, 44px tall (134px in the fixture card, 276px when full-width). Hover: `#e3ff86`.

**Secondary button (PREVIEW, MATCH REPORT)** — white fill, 1px `#001838` border, dark-blue uppercase text, 0px radius, 44px tall; hover fills `#f3f6f9`.

**Sign-in pill** — 9999px radius, `1px solid #ffffff80` border, `4px 12px 4px 4px` padding with a round avatar icon on the left, Kippax Modern 14px weight 700.

**Language button** — "EN", `#01375b` fill, white Kippax Modern 14px/700 uppercase, 9999px radius, 48px tall.

**Fixture card** — white card with a thin coloured top rule, "NEXT FIXTURE" / "LAST RESULT" label, an "All fixtures →" link, competition and date, two crests either side of a kick-off time or a scoreline in boxed condensed numerals, and one or two square buttons.

**News card** — rectangular thumbnail, a Kippax 17px/700 headline in `#001838`, and a 12px uppercase category label in `#69738c`.

**Section CTA** — a white bar button ("MORE NEWS", "MORE VIDEO") with an arrow, centred on a horizontal rule.

**Footer** — `#001838` band with crest, the EN button, round social icons, "Back to the top" and a row of legal links.

## Design System Architecture

No public Manchester City design system or brand guideline site was reached: https://www.mancity.com/club returned HTTP 403 Forbidden to the fetch tool.

The de-facto system is clear from the shipped CSS variables. Colours follow a `--colour-{scope}-{name}-{step}` scheme: `city` scales for dark-blue (50–950, `900` = `#001838`), sky-blue (`400` `#98c5e9`, `500` `#6caddf`), electric-yellow (50–950, `500` = `#e6ff00`), electric-blue (`500` `#3bd6ff`, `900` `#01375b`), neutral (`100` `#dde6ed`, `400` `#8898af`, `500` `#69738c`), purple, electric-pink, orange and green; `city-alpha-*` transparencies of the dark, sky and electric blues; and `global` success, warning, error, focused (`#2f7cda`) and alpha black/white tokens. Spacing (`--spacing-*`, including negative steps), opacity (`--opacity-1` 12% … `--opacity-7` 72%), blur, border widths (`--border-width-small` 0.09375rem, `--border-width-xlarge` 0.25rem) and radii are tokenised the same way. A second `--colour-palermo-*` palette ships in the same stylesheet.

## Do's and Don'ts

**Do**
- Use `#001838` dark blue for text and the footer, and sky blue for the header.
- Reserve electric yellow `#e6ff00` for ticket purchase.
- Keep buttons square (0px radius) and uppercase in Kippax 700.
- Set big section titles in KippaxCondensed, uppercase.
- Tint shadows with dark blue (`rgba(0, 24, 56, …)`) on the rare elevated element.

**Don't**
- Don't round the main buttons; pills are only for the sign-in and language controls.
- Don't use pure black for text; the club's ink is dark blue.
- Don't treat the sponsor banner strip or the grey partner placeholders as brand components.
- Don't mix in the `palermo` palette; it is not the City palette.

## Responsive Behavior

Not measured. The 390px mobile pass was served a "REDIRECTING..." page with a Cloudflare human-verification widget instead of the home page, so no mobile font sizes, header behaviour or layout could be recorded. Behaviour below 1280px was not measured.

## Iteration Guide

1. Start with a white canvas, `#001838` text and the three Kippax families.
2. Build a `#98c5e9` header with the crest, Kippax 14px menu links, a 9999px sign-in pill and a basket icon.
3. Lead with a dark-blue video hero: KippaxCondensed 40px/700 uppercase white headline, +0.4px tracking.
4. Lay out a centred column of four-up news cards: rectangular thumbnail, 17px/21px bold headline, 12px uppercase grey category.
5. Put fixture cards in the right column with crests, kick-off times and square 44px buttons — yellow `#e6ff00` for BUY TICKETS, white with a dark-blue border for PREVIEW.
6. Use 60px condensed uppercase section titles and a centred "MORE …" bar button on a rule.
7. Close with a `#6caddf` band and a `#001838` footer.
