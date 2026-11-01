---
version: alpha
name: Cyphr
category: "Portfolio"
description: "Cyphr (London brand-experience studio) site: warm grey canvas #ecece9, black #000000 ink and footer, one electric blue #212dd2 accent, Bandit Condensed uppercase display at 123.733px and 318.737px, Messina Sans Mono 13px body with -0.39px tracking."
colors:
  canvas: "#ecece9"
  ink: "#000000"
  primary: "#212dd2"
  on-dark: "#ecece9"
typography:
  display:
    fontFamily: "\"Bandit Condensed\", Impact, sans-serif"
    fontSize: 123.733px
    fontWeight: 400
    lineHeight: 123.733px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Bandit Condensed\", Impact, sans-serif"
    fontSize: 70.2px
    fontWeight: 400
    lineHeight: 63.18px
    textTransform: uppercase
  giant:
    fontFamily: "\"Bandit Condensed\", Impact, sans-serif"
    fontSize: 318.737px
    fontWeight: 400
    lineHeight: 245.428px
    textTransform: uppercase
  project-title:
    fontFamily: "\"Bandit Condensed\", Impact, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 0.4px
  body:
    fontFamily: "\"Messina Sans Mono\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: "-0.39px"
rounded:
  xs: 7.11px
  sm: 12.44px
  md: 14.22px
spacing:
  s1: 3.56px
  s2: 7.11px
  s3: 12px
  s4: 16px
  s5: 24.89px
  s6: 28.44px
  s7: 60px
  s8: 74.67px
  s9: 85.33px
components:
  project-link:
    textColor: "{colors.on-dark}"
    typography: "{typography.project-title}"
    padding: 0px 24.8889px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    height: 800px
---

## Overview

Cyphr is the site of Cyphr, "a London based Culture-first tech & experience studio leading brands to winning outcomes" (page title "Cyphr — Shaping the future of brand experience"). It is a typographic portfolio: a row of tall photographic stripes at the top, a headline that fills the page width ("SHAPING THE FUTURE OF BRAND EXPERIENCE"), a bracketed "[ Intro ]" with two monospaced paragraphs, a vertical blue bar, and full-bleed black project sections introduced by the client name in condensed type.

The top bar reads "[ home ]" at the left and "MENU" at the right with a "copy email" control; the menu (from the page HTML) lists work, about, insights, AI Visibility and contact. Square brackets are the system's punctuation: "[ Intro ]", "[ Read ]", "[ home ]", "[ menu ]". Sections run in this order: the intro; "Latest work" (Spotify, "Fan engagement strategy that rewards fandom"; LIV X, "Engagement strategy that rewards fandom"; Weber Ranch Vodka, "Digital Experience & Membership"; Tex — AI Mixologist, "AI Powered Conversation Inspiring Cocktail Culture"; "View all projects"); "We Keep Good Company"; and "Insights & Opinions", whose entries carry a date as "27 . 05", a long title and a "[ Read ]" link. The footer is black and carries "Privacy Policy", "Cookie Policy" and terms links and the line "Copyright © 2024 Cyphr. All rights reserved".

The voice is a studio's own: confident, culture-first and specific ("We decode what makes consumers move, then design platforms, products, and AI-powered experiences..."). The page measures 7,312px tall with 468 visible elements. Photography is saturated and cinematic (concert crowds, a footballer, a blue sky) and sits against the quiet grey canvas, often sliced into stripes or cropped tall.

## Colors

Three colours carry the whole site, declared as root variables.

- **Canvas `#ecece9`** is `--color--light`, the warm grey page (area weight 7,562) and the colour of text on black (369 characters).
- **Ink `#000000`** is `--color--dark` (`black`): all body and headline text (2,339 characters) and the black sections and footer (area weight 3,414).
- **Primary `#212dd2`** is `--color--blue`. It colours the giant "|" glyph (the vertical bar below the intro in the capture, 3 characters) and is the only chroma in the interface; images supply the rest of the colour.

No hover, border or shadow colours were measured beyond a 1px black border (2 uses). The stylesheet's other values (`#ffffff`, `#dddddd`, `#222222`, `#333333`, `#cccccc`, `#fafafa`) come from third-party or default CSS and were not measured on page elements.

## Typography

Two families, both self-named: **Bandit Condensed** (172 characters; fallback `Impact, sans-serif`) for display and project names, and **Messina Sans Mono** (2,124 characters) for body and labels, with **Messina Sans** (415 characters, weights 400 and 300) for small footer text. Weight is 400 almost everywhere (2,669 characters; 300 on 42).

- **Display, Bandit Condensed 123.733px / 400, line-height 123.733px, uppercase:** the hero headline, black. Mobile 70.2px / 63.18px.
- **Giant, 318.737px / 400, line-height 245.428px, uppercase:** the oversized "|" in blue (h2); mobile 93.9484px / 72.3403px. Other giant sizes by characters: 369.778px (20) and 129.778px (25).
- **Project title, 40px / 400, line-height 40px, letter-spacing 0.4px:** "Spotify" and the other client names, in `#ecece9` on black.
- **Body, Messina Sans Mono 13px / 400, line-height 15.6px, letter-spacing -0.39px:** the intro paragraphs (2,114 characters). Mobile 12.1875px / 15.8438px.
- **Mono lead, 19.5556px with -0.782222px tracking** (304 characters) and small text at 9.77778px (69 characters, footer, Messina Sans) and 8.88889px (42).

Mobile sizes by characters: 12.1875px (2,183), 19.5px (304), 36.5625px (82), 9.75px (42), 70.2px (38), 78px (25), 109.2px (20).

**Substitutes.** Both families are proprietary or site-hosted; Impact is the declared fallback for Bandit Condensed and generic sans-serif for Messina.

## Layout

The layout is built on a fluid grid of CSS variables: `--size-container-ideal: 1440`, `--size-container-min: 992px`, `--size-container-max: 2560px`, `--size-unit: 16`, a `--page-padding: var(--gap-s)` and em-based gaps (`--gap-xxs .5em`, `--gap-xs .875em`, `--gap-s 1.125em`, `--gap-m 1.5em`, `--gap-ml 1.75em`, `--gap-l 2em`, `--gap-xl 2.5em`, `--gap-xxl 3em`, `--column-gap .625em`). Measured gaps: 16px (26 uses), 7.11111px (10), 28.4444px (10), 24.8889px (4), 74.6667px (2), 168px (2). Paddings: 16px (17), 24.8889px (7).

The hero headline box is 1,248px wide at 1280px, i.e. a 16px page padding on each side. The intro sets two narrow mono columns beside a tall central photograph; the next row shows a second tall photograph at the right edge, cut off. Project sections are full-width black blocks about 711px tall with a client name at the top left over a photograph. The footer is a black block 800px high.

## Elevation & Depth

None: no shadows were measured (the table is empty) and there are no borders beyond a 1px black line. Depth comes from stripes and crops of photography, the black/grey section changes and the very large type, plus a small round "C" badge floating at the right of the second photograph in the capture.

## Shapes

Radii are small and used on image tiles and stripes: 7.11111px (7 uses as all-corners; 21 more on the right edge only, `0px 7.11111px`; 12 top-right; 11 bottom-left), 12.4444px (2) and 14.2222px (1). The root variable `--pattern-corner: .5em` and `--pattern-col-width: 3em` define the stripe pattern in the top hero. The result is a repeating pattern of rectangles with one rounded corner. Text and bars are square.

## Components

- **Stripe hero.** A pattern of tall photographic stripes with a stepped lower edge and one 7.11px rounded corner on each cell.
- **Headline.** Uppercase Bandit Condensed at the full container width, black on grey.
- **Bracket label.** Mono text in square brackets: "[ Intro ]", "[ Read ]", "[ home ]", "[ menu ]".
- **Mono paragraph.** 13px Messina Sans Mono, black, narrow measure (284px wide in the measured paragraph).
- **Project block.** A black section with a `#ecece9` client name (40px), a mono description and a full-bleed photograph.
- **Insight row.** Date at the left ("27 . 05"), title and extract, "[ Read ]".
- **Footer.** Black, 800px, legal links in 9.77778px Messina Sans.

No filled button, input or card was measured; the interface is made of type, brackets and imagery.

## Design System Architecture

No public design system or brand guideline was found; the page opened at https://www.cyphr.studio/ carries only navigation, project and insight text. The de-facto system is a variable-driven fluid layout: `--color--light`, `--color--dark`, `--color--blue`; em-based `--gap-*` and `--column-gap`; container clamp variables (`--size-container`, `--size-container-min`, `--size-container-ideal`, `--size-container-max`); `--size-font: calc(var(--size-container) / ...)` which scales type with the container; and motion tokens `--duration-default: 0.725s`, `--cubic-default: cubic-bezier(0.65, 0.01, 0.05, ...)` and `--animation-default`. Font sizes scale with the container, which is why measured sizes are fractional (13px, 19.5556px, 123.733px at 1280px).

## Do's and Don'ts

- Do keep the page `#ecece9` with black type and reserve `#212dd2` for one deliberate accent.
- Do set headlines in uppercase condensed type at container width and body in a mono face with negative tracking.
- Do wrap small interface labels in square brackets.
- Do let photography supply the colour, cropped tall or sliced into stripes.
- Don't add shadows or card chrome; none were measured.
- Don't give buttons or inputs fills; the site uses text labels.
- Don't hard-code pixel type sizes; scale them with the container as the site does.

## Responsive Behavior

Measured at 390px: the h1 is 70.2px / 63.18px (desktop 123.733px), 364px wide and 126px high; the giant "|" is 93.9484px / 72.3403px; the intro paragraph is 12.1875px / 15.8438px and 364px wide (desktop 13px, 284px). The type scale is proportional to the container through `--size-font`. Mobile layout of the stripe hero, columns and navigation was not measured (no band data).

## Iteration Guide

1. Canvas `#ecece9`, ink `#000000`, accent `#212dd2`.
2. Bandit Condensed uppercase for headlines and project names; Messina Sans Mono 13px with -0.39px tracking for text.
3. Use bracket labels, full-width black project sections and tall cropped photographs; stripe the hero.
4. Keep gaps in the em scale from the variables and scale type with the container.
5. Measure new components before adding tokens.
