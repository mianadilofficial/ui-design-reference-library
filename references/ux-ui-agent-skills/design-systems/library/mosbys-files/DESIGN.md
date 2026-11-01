---
version: alpha
name: "Mosby's Files"
category: "Architecture & Interiors"
description: "Mosby's Files (mosbyfiles.com), an interactive project on American modernist architecture, on near-black #191919 with stacked file-tab panels in red #d71e1e, blue #1e4bd7, teal #0c7866 and purple, set in Founders Grotesk 127.68px, Signifier serif tabs and IBM Plex Mono body."
colors:
  canvas: "#d71e1e"
  page-body: "#191919"
  ink: "#ffffff"
  primary: "#787a7f"
  surface: "#1e4bd7"
  surface-3: "#0c7866"
  ink-3: "#fdfaf7"
  ink-4: "#000000"
  nav-bg: "#191919cc"
typography:
  display:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 127.68px
    fontWeight: 700
    lineHeight: 102.144px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 81.42px
    fontWeight: 700
    lineHeight: 65.136px
    textTransform: uppercase
  body:
    fontFamily: "\"IBM Plex Mono\", sans-serif"
    fontSize: 11.25px
    fontWeight: 400
    lineHeight: 15.75px
  nav:
    fontFamily: Signifier, serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18.75px
  link:
    fontFamily: Signifier, serif
    fontSize: 24.375px
    fontWeight: 400
    lineHeight: 30.4688px
rounded:
  xs: 4px
spacing:
  s1: 7.5px
  s2: 11.25px
  s3: 15px
  s4: 18.75px
  s5: 22.5px
  s6: 28.13px
  s7: 30px
  s8: 37.5px
  s9: 56.25px
  s10: 58.12px
components:
  link:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-3}"
  nav-link:
    textColor: "{colors.ink-3}"
    typography: "{typography.nav}"
---

# Mosby's Files

## Overview
The measured site is www.mosbyfiles.com (page title "Mosby's Files—American Modernist Architecture", language en_US). It is a single-screen editorial project: the heading "AMERICAN MODERNISM" is followed by the statement "A project exploring early 20th-century American architects, contrasting them with European Modernism and revealing a distinct American path of functionalism that shaped contemporary architecture". The footer line credits the build: "CRAFTED WITH [U+2665] BY TUBIK STUDIO". The only navigation item is "About" at the top right, beside a centered wordmark "MOSBY'S FILES".

The interface is a stack of colored folders. Each architect is a rounded tab (Frank Lloyd Wright, Irving Gill, Frank Gehry, Louis Kahn, I. M. Pei, Paul Rudolph, Mary Colter, Louis Sullivan) that sits on a full-width colored panel, and each panel carries a monospaced category label with a chevron on the right ("Organic & Early Modernism", "Expressive", "Monumental Modernism", "Contextual & Transitional Architecture"). The open panel (red) shows a short paragraph in monospace and a row of seven small line-drawn compass and site-plan icons above a scale bar (0 4 8 16 32) and the copyright "© 2026". The whole thing resembles a filing cabinet or a set of colored dividers on a dark desk, which fits the "Files" name, and the typographic contrast of a heavy condensed grotesque, a bookish serif and a typewriter-like monospace gives it an archival-yet-contemporary tone. The page is only 1248px tall at 1280px width.

## Colors
The page ground is `{colors.page-body}` (#191919, the site's `--color-dark`), with the header at `{colors.nav-bg}` (#191919cc, 80% opacity). The stacked panels are measured by area as blue `{colors.surface}` (#1e4bd7, 2501), red `{colors.canvas}` (#d71e1e, 2317, the open panel and several tabs), teal `{colors.surface-3}` (#0c7866, 1650), purple #581e70 (1546), yellow #ffe927 (785, I. M. Pei tab) and black `{colors.ink-4}` (#000000, 785, Paul Rudolph tab). Note: the generator labels the red "canvas" because it is the largest red area in the stack, but the page background behind the stack is #191919.

Text is `{colors.ink}` white (#ffffff, 1545 weighted characters) on all colored panels, `{colors.primary}` gray (#787a7f, 194, the site's `--color-gray`, used for the intro statement) and `{colors.ink-3}` off-white (#fdfaf7, 52, the site's `--color-light`, used for the h1 and nav). The root variables name `--color-dark` #191919, `--color-light` #fdfaf7 and `--color-gray` #787a7f. The panel and tab hues are content-coding colors for the categories, each painted full-bleed with white text.

## Typography
Three faces are loaded: IBM Plex Mono (400, 1399 weighted characters, body and labels), Signifier (400, 406, a serif used for the architect tabs, the nav and the intro) and Founders Grotesk (700, 17, the heading only). JetBrains Mono appears in the CSS but not on measured text.

`{typography.display}`: Founders Grotesk 127.68px weight 700, line-height 102.144px, uppercase, no tracking (the "AMERICAN MODERNISM" h1). `{typography.display-mobile}`: 81.42px, line-height 65.136px. `{typography.body}`: IBM Plex Mono 11.25px, line-height 15.75px (the panel paragraph and labels, the dominant size with 1394 weighted characters). `{typography.nav}`: Signifier 15px, line-height 18.75px. `{typography.link}`: Signifier 24.375px, line-height 30.4688px (tab names). A 18.4626px size appears on 194 characters (the gray intro statement). Only weights 400 and 700 are used, and no letter-spacing was measured at any size.

## Layout
The desktop page is 1280px wide; a centered column about 1093px wide carries the stack (the tab link measures 1093px wide and 809px tall), with the heading centered above it and a thin header bar 57px tall. Root variables define `--container-offset` 32px, `--tag-height` 2.75rem, `--stack-group-offset` 3.75rem and `--stack-rotation-offset` 1rem, which describe the stack geometry (the folder tabs overlapping each panel). Gaps measured: 7.5px, 37.5px, 18.75px, 56.25px, 11.25px and 22.5px; paddings 58.1213px (5), 30px, 15px and 28.125px. The spacing tokens `{spacing.s1}` to `{spacing.s10}` list 7.5px to 58.12px steps. The layout is strictly centered and uncluttered.

## Elevation & Depth
No box-shadow was measured on rendered elements. The root declares `--stack-shadow: 0 -1px 8px rgba(0,0,0,.15)` and `--stack-perspective: 3000px`, but neither was observed on a measured element. Depth in the capture comes from overlapping colored planes whose tabs rise above the panel below.

## Shapes
The only radius measured is `{rounded.xs}`: 4px 4px 0px 0px on 20 elements (the top corners of panels). The tab shapes in the capture are custom curved tab silhouettes with a rounded top and flared base; their outline is drawn by graphics or clip shapes and is not a border-radius value. Everything else is square.

## Components
**Folder tab / link** (`{components.link}`): a colored fill (the token example is blue #1e4bd7), white Signifier 24.375px text, 4px top corner radius; tabs sit side by side in a row above their panel, each color-coded to its panel. **Category label**: IBM Plex Mono 11.25px white, right-aligned with a chevron that toggles open or closed. **Navigation** (`{components.nav}`, `{components.nav-link}`): #191919cc bar, #fdfaf7 Signifier 15px "About" link, which measured opacity 0.8 before the hover pass. **Icon row**: seven white line icons of compasses and plans. No buttons, inputs or cards were detected.

## Design System Architecture
No public design system or brand-guidelines page was opened. The site's root CSS variables form a small tokenized system: color (`--color-dark`, `--color-light`, `--color-gray`, `--color-primary` aliasing dark, `--color-contrast` aliasing light), layout (`--container-offset`, `--tag-height`) and the stack (`--stack-group-offset`, `--stack-perspective`, `--stack-shadow`, `--stack-rotation-offset`, and a stack border-radius variable). The category colors (red, blue, teal, purple, yellow, black) are applied per panel rather than defined as global roles.

## Content Structure and Voice
Content is organized as a taxonomy rather than a feed. Architects are grouped under four named movements, each given a color: Organic & Early Modernism, Expressive, Monumental Modernism, and Contextual & Transitional Architecture. The closing paragraph of the open panel reads "Architecture shaped by place, culture, and continuity rather than formal invention alone", and it ends with "A quiet but foundational thread in the fabric of American architectural identity." Sentences are essayistic and measured, set in a small monospace that contrasts with the large heading. The only calls to interaction are the tabs and the chevrons next to each category label; there are no buttons, forms or marketing banners. Small details complete the archival feel: a graphic scale bar numbered 0, 4, 8, 16, 32, a row of compass and plan icons, and an attributed credit line to the studio that built the site.

## Do's and Don'ts
- Do ground the page in #191919 and use #fdfaf7 for the main heading.
- Do give each category a saturated full-bleed color (red, blue, teal, purple) with white text.
- Do pair a heavy uppercase grotesque heading, a serif for names and a monospace for notes.
- Do keep corners to 4px on the top of panels.
- Don't add gradients, drop shadows or additional accent hues.
- Don't use the gray #787a7f for long text on colored panels; it is the intro-statement color on #191919.
- Don't set body text above 12px in the panels; the measured body is 11.25px.

## Responsive Behavior
The mobile pass measured the h1 at 81.42px with 65.136px line-height in a 354px column (against 127.68px on desktop) and the body paragraph present with copy beginning "A project exploring early 20th-century A...". Stack behavior and breakpoints beyond this were not measured.

## Iteration Guide
1. Start from #191919 and place a heavy uppercase heading in #fdfaf7.
2. Group items into full-width colored panels with serif tabs and a mono category label.
3. Keep body type in IBM Plex Mono around 11px, white on color.
4. Round only the top corners of panels (4px).
5. Re-run `node web/scripts/verify-designs.mjs --slug=mosbys-files` after edits.
