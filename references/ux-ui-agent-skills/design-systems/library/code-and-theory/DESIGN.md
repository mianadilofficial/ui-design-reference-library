---
version: alpha
name: Code and Theory
category: "Agencies & Studios"
description: "Code and Theory's site is a pure black (#000000) stage with white type in akademie (53.33px headlines, 46.29px project names at weight 400), a light koor serif for the hero's second line, Fragment Mono 12px notes in #a9a9a9, one white 56px pill button, no cards, and full-width case-study imagery."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-raised: "#161616"
  ink-muted: "#a9a9a9"
  ink-soft: "#cfcfcf"
  ink-dim: "#6c6c6c"
  hairline: "#4d4d4d"
  canvas-cream: "#fbfcf7"
typography:
  display:
    fontFamily: akademie, "akademie Fallback", sans-serif
    fontSize: 53.3333px
    fontWeight: 400
    lineHeight: 61.3333px
    letterSpacing: "-0.533333px"
  display-mobile:
    fontFamily: akademie, "akademie Fallback", sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32.2px
    letterSpacing: "-0.28px"
  heading:
    fontFamily: akademie, "akademie Fallback", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 23px
    letterSpacing: "-0.3px"
  subheading:
    fontFamily: akademie, "akademie Fallback", sans-serif
    fontSize: 46.2857px
    fontWeight: 400
    lineHeight: 53.2286px
    letterSpacing: "-0.462857px"
  body:
    fontFamily: "\"Fragment Mono\", \"Fragment Mono Fallback\", monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.4px
  button:
    fontFamily: akademie, "akademie Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.2px
  serif-display:
    fontFamily: "\"koor\", \"koor Fallback\""
    fontSize: 53.3333px
    fontWeight: 300
  serif-display-mobile:
    fontFamily: "\"koor\", \"koor Fallback\""
    fontSize: 28px
    fontWeight: 300
rounded:
  md: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 56px
  project-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  footer-note:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
---

# Code and Theory

## Overview

Code and Theory (codeandtheory.com, page title "Code and Theory") presents itself on its home page as "The Digital Transformation Agency", with a second hero line in a light serif: "Where the C-Suite Comes Together to Create Change". A footer note in the measured page text says "Code and Theory is a proud member of Stagwell Group." Directly below the hero, a large statement reads (from the capture): "Code and Theory is the only agency with 50% creatives and 50% engineers. This model has earned the trust of 50+ Fortune 500 CEOs, CMOs and CTOs to solve their biggest business transformation problems."

The site is built almost entirely from black and white. The header is a thin black bar with the "CODE AND THEORY" wordmark (a serif-capital SVG logo 177px wide by 14px tall) at the left and five small links at the right (Our Work, About, Latest News, Careers, Contact). The first band is black with the two-line headline set low on the screen, the first line in dim gray `#6c6c6c` and the second line in white. A band in warm off-white `#fbfcf7` follows, carrying a video or image of a TIME cover; after that, a very long black section (11499px) holds the statement, a "Selected Work" label and a vertical list of case studies.

Each case study is a row: the client name in large white type at the left (TIME, Microsoft, Stanley Black & Decker, and further rows for JBL, Amazon Ads, NFL, NBC and Philadelphia Flyers in the capture), a one-line description at the center ("Leading an AI overhaul for a cultural icon" for TIME), an arrow icon at the right, and beneath it a full-width image or video that is the visual proof. Below the work list the capture shows a row of client logos, a services list, an "In Conversation" grid of article tiles, a closing call "Let's get to work." with an e-mail address and a "Start a conversation." link, and a footer.

The tone is confident and corporate-technical: short declarative claims, the numbers "50%" and "50+", and no decoration beyond the imagery. The measured page is 12877px tall at 1280px.

## Colors

The palette is a pure grayscale on black, with one warm band.

- **Canvas `#000000`**: the page background; it covers essentially the whole page (area weight 13741) and about 49% of the capture is `#010101` after JPEG.
- **Ink `#ffffff`**: all primary text (3427 characters), the project names, the statement and the filled button. The generator also assigns it as `primary` because the only filled action, "View all work", is white; on-primary text is `#000000`.
- **Ink soft `#cfcfcf`** (514 characters) and **ink muted `#a9a9a9`** (869 characters): secondary text; `#a9a9a9` is the measured color of the 12px monospace footer note.
- **Ink dim `#6c6c6c`**: the first hero line "The Digital Transformation Agency" (54 characters), a deliberately dimmed gray that lets the second line dominate.
- **Surface raised `#161616`**: a barely lighter black measured as a background (area weight 5).
- **Hairline `#4d4d4d`**: the rule color (11 measured borders); a slightly translucent variant `#545454e6` appears on 4 borders.
- **Canvas cream `#fbfcf7`**: the fill of the second band, behind the TIME cover imagery (band height 720px).

The consent banner's blue link (`#3860be`), its dark-gray text (`#696969`) and its white card are third-party cookie UI and are excluded. The stylesheet declares HSL channel variables for a gray ramp, a red (`358, 78.44%, 67.25%`), an inverted red and a green (`151, 55%, 45%`); none of these was observed on a measured element of the page.

## Typography

Three families are loaded: **akademie** (400 and 700), **koor** (300 and 400, a serif) and **Fragment Mono** (400). By characters, akademie sets 3740, Fragment Mono 915 and koor 477. The site's font files are named `nb_akademie_regular_webfont`, `nb_akademie_bold_webfont`, `Koor_LightNormal` and `Koor_LightThick`.

| Role | Family | Size / line height | Spacing |
|---|---|---|---|
| Display (hero line 1, statement) | akademie | 53.3333px / 61.3333px, weight 400 | -0.533333px |
| Display, mobile pass | akademie | 28px / 32.2px, weight 400 | -0.28px |
| Hero line 2 | koor | 53.3333px, weight 300 | not recorded |
| Hero line 2, mobile pass | koor | 28px, weight 300 | not recorded |
| Subheading (project names) | akademie | 46.2857px / 53.2286px, weight 400 | -0.462857px |
| Heading (section label "Selected Work") | akademie | 20px / 23px, weight 400 | -0.3px |
| Button | akademie | 16px / 23.2px, weight 400 | normal |
| Body note | Fragment Mono | 12px / 17.4px, weight 400 | normal |

By characters, the sizes are 18px (1940), 12px (891), 20px (769), 16px (727), 53.3333px (336) and 46.2857px (73). Weights are almost all 400 (5002 characters), with 300 on 70 characters (the serif hero line), 600 on 46 and 700 on 14. Letter spacing is -1% of the size on the 53.3333px and 46.2857px text and -0.3px on the 20px text.

The pairing is deliberate: a neutral grotesque (akademie) for everything the reader scans, a light serif (koor) for the one phrase of voice in the hero, and a monospace for fine print and notes.

**Font substitutes.** akademie, koor and Fragment Mono are served by the site; no foundry or license page was opened. For prototypes, use a neutral grotesque at weight 400 with -1% tracking for akademie, a light high-contrast serif for koor, and any monospace at 12px for Fragment Mono.

## Layout

The stylesheet defines an 8-column grid: `--grid-columns` 8, `--grid-margin` 1.5rem and `--grid-gap` 1rem, with a header height of 4.25rem. The layout probe found six visible header links on desktop and no menu toggle.

The hero is a 658px-tall black band with text left-aligned at the grid margin. The big statement is left-aligned. The work list is a stack of full-width rows separated by thin rules; each row has the client name at the left, the description centered and an arrow at the right, with a full-width media block beneath. Paddings measured: 40px (40 uses), 8px (10), 16px (7), 4px and 12px (4 each), 64px (3), 10px (3), 24px and 30px (2 each), 71px, 280px and 56px (1 each). Gaps: 16px (117 uses), 12px (52), 8px (20), 24px (12), 48px (11), 4px (8), 32px (6), 80px (5), 56px (2), 40px (2), 64px (1).

## Elevation & Depth

None in the brand. The only measured shadow (`rgba(0, 0, 0, 0.2) 0px 0px 18px 0px`) belongs to the consent banner and is not documented as brand UI. The stylesheet carries Tailwind shadow variables at their `0 0 #0000` defaults and two white glow recipes (`0 0 6px #ffffff29, 0 0 28px #ffffff1c` and `0 0 11px #ffffff57, 0 0 44px #fff3`) that were not observed on a measured element.

Depth is made by contrast between the black page and bright media, by the cream band after the hero, and by the scale of the media blocks.

## Shapes

Measured radii: `3.35544e+07px` (9 elements: fully rounded pills and round buttons), `2px` (4 elements, the consent buttons), `24px` (1 element) and `2.5px` (1 element, the consent banner). Tokens: `md` 24px and `pill` 9999px; the 2px and 2.5px values belong to third-party UI and are omitted.

The site's own shapes are the pill and square media. The root variables declare `--radius-sm` .25rem, `--radius-md` .375rem, `--radius-lg` .5rem, `--radius-xl` .75rem and `--radius-3xl` 1.5rem (24px), a Tailwind-style scale.

## Components

- **Primary button ("View all work")**: white fill, black 16px label at weight 400, fully rounded pill, padding 0px 24px, 56px tall and 186px wide. A hover state was not measured for it.
- **Navigation link**: small white akademie labels at the top right (Our Work, About, Latest News, Careers, Contact).
- **Project row**: client name (46.2857px, white), center description, right arrow icon, a hairline `#4d4d4d` rule, then full-width media.
- **Section label**: "Selected Work" at 20px, white.
- **Body note**: Fragment Mono 12px / 17.4px in `#a9a9a9` for the Stagwell membership note and other fine print.
- **Statement**: 53.3333px akademie white paragraph; hero line 2 in koor 300.
- **Closing call**: "Let's get to work." with an e-mail link and a "Start a conversation." text link.

Not documented as brand UI: the consent banner and its three buttons (Reject All, Accept All Cookies, Customize Settings), which appeared in the capture and in the extraction.

## Design System Architecture

No public design system or brand-guideline page was identified. The site (https://www.codeandtheory.com) returned HTTP 429 Too Many Requests to every fetch attempt, so none of its brand, about or press pages could be opened; the measured home page text links to no brand guidelines or press kit.

The de-facto system is visible in the shipped CSS: Tailwind-style variables (`--spacing` .25rem, `--radius-*`, `--tracking-wider` .05em, `--leading-relaxed` 1.625, `--blur-*` 8px to 40px, `--font-weight-light` 300 through `--font-weight-bold` 700), grid variables (`--grid-columns`, `--grid-margin`, `--grid-gap`), a gray ramp expressed as HSL channels (`--color-hsl-channels-grey-1` through `grey-10`), three font variables (`--font-akademie`, `--font-serif` for koor, `--font-fragment-mono`) and a `--header-height` of 4.25rem. The Next.js static font paths (`/_next/static/immutable/media/`) show how the fonts are served.

## Do's and Don'ts

Do
- Keep the page black (`#000000`) with white text and gray steps `#cfcfcf`, `#a9a9a9` and `#6c6c6c` for hierarchy.
- Set headlines at 53.3333px and project names at 46.2857px in akademie weight 400 with -1% tracking.
- Use the light koor serif for one phrase of voice, such as the hero's second line.
- Present work as full-width rows: name, one-line description, arrow, then media.
- Use one white pill button for the main action.

Don't
- Don't add card borders, shadows or accent colors; color comes from the work imagery.
- Don't use bold weights for display text; the measured display weight is 400.
- Don't treat the consent banner as a pattern to copy.
- Don't round media; only the button is a pill.

## Responsive Behavior

Measured in the mobile pass (390px): the H1 drops from 53.3333px to 28px (line height 32.2px, letter spacing -0.28px, 320px wide); the hero's second line is also 28px at weight 300; the "Selected Work" label stays 20px; the button stays 16px with 0px 24px padding, 56px tall and 186px wide; the monospace note stays 12px. In the mobile size list the 53.3333px (336 characters) and 46.2857px (73 characters) sizes together appear as 28px (409 characters), and the desktop 28px size on 93 characters appears as 22px; the mobile character-weighted sizes are led by 16px (2451), 12px (891), 20px (769) and 28px (409). The layout probe recorded two visible header links, a menu toggle labeled "Open Nav Menu" and at most two card columns; the first mobile band spans content from 24px to 366px.

How the work rows and media rearrange on mobile beyond these figures was not measured.

## Iteration Guide

1. Start from `canvas` `#000000`, `ink` `#ffffff`, `ink-muted` `#a9a9a9`, `ink-dim` `#6c6c6c` and `hairline` `#4d4d4d`.
2. Load akademie (400), koor (300) and Fragment Mono (400); set hero lines at 53.3333px with -0.533333px tracking, the second line in koor 300.
3. Build project rows at 46.2857px with a 20px description and an arrow; separate with `#4d4d4d` rules.
4. Build the main action as a 56px-tall white pill with a 16px black label.
5. Drop the headline to 28px and keep 16px button text for narrow screens; add a menu toggle labeled "Open Nav Menu".
6. Keep fine print in Fragment Mono 12px / 17.4px.
7. Before adding any new token, re-measure the page with the consent banner dismissed.
