---
version: alpha
name: "CHEW"
category: "Portfolio"
description: "CHEW (chew.productions), a London creative studio for gaming and esports film: a pure black canvas (#000000) with white Messina Sans type in uppercase, 14px captions, 108.8px bold hero titles at -5.44px tracking, a #171616 menu panel, and full-bleed project video instead of buttons, cards or shadows."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-dark: "#171616"
  surface-near-black: "#111111"
  cream: "#f8eee4"
  grey-line: "#5b5b5b"
  grey-text: "#c1c1c1"
typography:
  display:
    fontFamily: "\"Messina Sans\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: "-0.28px"
    textTransform: uppercase
  nav:
    fontFamily: "\"Messina Sans\", Arial, sans-serif"
    fontSize: 76.8px
    fontWeight: 700
    lineHeight: 65.28px
    textTransform: uppercase
  hero-title:
    fontFamily: "\"Messina Sans\", Arial, sans-serif"
    fontSize: 108.8px
    fontWeight: 700
    letterSpacing: "-5.44px"
    textTransform: uppercase
rounded:
  xs: 12.6px
spacing:
  s1: 12px
  s2: 24px
components:
  nav:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

CHEW's about page (https://www.chew.productions/about) describes a London-based, story-first creative studio that makes branded films and documentaries for gaming and esports. It was founded in 2023 by Creative Director Tom Newman and Executive Producer Becky Williams, and its stated ambition is "to make the best gaming content in the world." The pitch is blunt: "Gamers don't want more advertising. They want something worth watching." The tagline shown on the home page is "A CREATIVE STUDIO BUILT FOR GAMING," and the page title is "CHEW // A Creative Studio Built for Gaming & Esports."

The site behaves like a film reel rather than a brochure. The captured home page is a single full-viewport scene: a looping project film (a close-up of a hand moving a chess piece, for the commercial "EWC // CR7 Trailer") fills the whole frame, the project title is set across the middle in very large white capitals, and everything else is tiny uppercase text pinned to the four edges. Top row: the chunky white CHEW wordmark at the left, then WORK, SHOWREEL, ABOUT and CONTACT. Bottom row: the tagline at the left, the client ("EWC") and category ("COMMERCIAL") in the middle, and a slide counter ("01 / 07") at the right. Seven projects are listed on the page: EWC // CR7 Trailer, Red Bull // Wololo, EWC // RISE ABOVE, DHL // The Dispatch: Season 2, Gucci // The Bellhop, Google // #WeArePlay and Memories of CS:GO - The Early Years. Navigation labels found on the page are Work, Documentary, Commercial, Showreel, About, Contact, Play and Close Showreel.

The voice, per the about page, is "confident, witty and fan-literate" with a self-deprecating streak; the visual voice is the opposite of playful: black, white, one typeface, no ornament. The footage is the color.

## Colors

The palette is essentially two values. `{colors.canvas}` is pure black (#000000, 10,286 measured area units) and `{colors.ink}` is pure white (#ffffff, the only text color measured, on all 165 measured characters). `{colors.primary}` is also white because the site has no button, link fill or accent hue; the extractor found no call-to-action. A translucent black background (`#0000001f`, roughly 12% opacity) covers 9,239 measured area units; it is not used as a distinct surface color.

Two dark surfaces are measured: `{colors.surface-dark}` (#171616, declared as `--dark`) is the fill of the menu panel, and `{colors.surface-near-black}` (#111111) covers a smaller area. The stylesheet declares three more neutrals: `{colors.cream}` (#f8eee4, `--light`), `{colors.grey-line}` (#5b5b5b, `--grey-line`) and `{colors.grey-text}` (#c1c1c1, `--grey-text`). None of the three was measured on the home page's text or backgrounds, so they are available brand neutrals rather than observed usage. The stylesheet also declares `--swiper-theme-color: #007aff`; that is the carousel library's own default and is not a brand color, so it is excluded. In the capture, ABOUT appears dimmer than WORK, SHOWREEL and CONTACT; the measured colors for that state were not recorded.

## Typography

One family, Messina Sans, set in uppercase almost everywhere. The loaded face list gives a variable range of 1 to 1000 for Messina Sans, with Arial as the next stack entry. Merriweather (light, regular, bold and black in normal and italic) is also loaded, but the measured text is 164 characters of Messina Sans and 1 of Arial, so Merriweather was not seen in use on the home page.

Three sizes were measured. `{typography.display}` is 14px, weight 400, line-height 14px, letter-spacing -0.28px, uppercase, used for the tagline, the client and category labels and the counter. `{typography.nav}` is 76.8px, weight 700, line-height 65.28px, uppercase, belonging to the menu panel links (Documentary, Commercial, About, Contact); that panel was in the page's DOM but is not visible in the capture. `{typography.hero-title}` is 108.8px, weight 700, letter-spacing -5.44px, uppercase, the project title in the middle of the screen (15 measured characters). The stylesheet declares the sizes in rem (`--font--fs--14` .875rem, `--font--fs--15` .938rem, `--font--fs--24` 1.5rem, `--font--fs--80` 5rem, `--font--fs--140` 8.75rem) and tracking in em (`--font--ls--m2` -.02em, `--font--ls--m3` -.03em, `--font--ls--m5` -.05em); the measured -0.28px at 14px equals -0.02em and -5.44px at 108.8px equals -0.05em. The relationship between the declared 5rem and 8.75rem sizes and the measured 76.8px and 108.8px was not investigated. The hero title's line-height was not recorded. Substitutes if Messina Sans is unavailable: any grotesque or neo-grotesque sans with a wide weight range, set in uppercase with the same negative tracking, such as Inter Tight or Arial.

## Layout

The page is a 1280px-wide, one-screen scene (the measured scroll height equals the 800px viewport height). There is no content grid; instead, items are anchored to the edges with a consistent inset. The measured gap is 12px (20 elements, declared as `--spacing--smallest` .75rem) and the measured padding is 24px (19 elements, declared as `--spacing--small` 1.5rem); larger steps are declared as `--spacing--medium` 3rem and `--spacing--big` 6rem. Top row items are spread evenly across the width: the wordmark at the far left, WORK in the left-center, SHOWREEL and ABOUT in the right-center and CONTACT at the right edge. The bottom row uses the same columns, so the client and category labels line up under WORK and SHOWREEL in the capture. The project title is left-aligned to the same column as WORK and sits just above the vertical middle of the screen.

The menu panel (when open) is a full-viewport 1280 by 800 block filled with `{colors.surface-dark}`, with its links stacked in very large bold capitals, each about 65px of line-height; the link row measured 613px wide.

## Elevation & Depth

None. No box-shadow was measured on the page and no borders were found (the border color list is empty). Depth comes entirely from the film: close-up photography with shallow focus, a darkening layer over the footage, and text laid directly on top. The only structural separation is the `{colors.surface-dark}` panel against the `{colors.canvas}` black. The stylesheet declares a Swiper navigation size of 44px (`--swiper-navigation-size`), but no arrows were visible in the capture.

## Shapes

Almost nothing is rounded. A single 12.6px radius was measured on one element and is kept as `{rounded.xs}`; which element carries it was not recorded. There are no buttons, pills, cards or input fields in the measured page. The wordmark is a set of heavy, blocky white capitals; the play and showreel controls (Play, Close Showreel) exist as labels but their shapes were not measured.

## Components

- **Wordmark**: white CHEW logotype at the top-left.
- **Header links**: Messina Sans 14px uppercase in white, spread across the top row (WORK, SHOWREEL, ABOUT, CONTACT). Hover on the menu links changed neither color (white to white), background nor border in the measured hover pass.
- **Menu panel** (`nav`, `nav-link`): `{colors.surface-dark}` fill, `{colors.ink}` text at `{typography.nav}`, a vertical list of Documentary, Commercial, About and Contact.
- **Hero title**: `{typography.hero-title}` in white over the film, one project name per slide in the form "CLIENT // TITLE".
- **Metadata row**: client, category and a "01 / 07" counter at `{typography.display}`, bottom edge.
- **Showreel controls**: "Showreel", "Play" and "Close Showreel" appear in the page text; the video player font face is named VideoJS in the stylesheet.

## Design System Architecture

No public design system or brand guideline was found: the home page and the about page contain no links to either, and the about page states no press kit. The about page credits the site builder as Tore Bentsen (torebentsen.com). The de-facto system is the shipped CSS. Its root variables are `--black`, `--white`, `--dark`, `--light`, `--grey-line`, `--grey-text` for color; `--font--main` ("Messina Sans", Arial, sans-serif), `--font--fs--*` and `--font--ls--*` for type; and `--spacing--smallest`, `--spacing--small`, `--spacing--medium`, `--spacing--big` for rhythm, 21 variables in all. The font faces named in the stylesheet are VideoJS, swiper-icons, webflow-icons, Messina Sans and Merriweather, that is, three icon or player fonts plus the two text fonts. Tokens are therefore few and strictly neutral: scale and spacing carry the design.

## Do's and Don'ts

- Do keep the canvas pure black and every text pure white; let the footage supply all color.
- Do set all type in uppercase Messina Sans with negative tracking (-0.02em at small sizes, -0.05em at hero size).
- Do pin small metadata to the screen edges and leave the middle for one very large title.
- Do pair the large title with weight 700 and the small labels with weight 400.
- Don't add buttons, cards, borders or shadows; none were measured.
- Don't use the Swiper library's default blue (#007aff) or the declared Merriweather serif for brand text; neither was measured in use.
- Don't introduce colored accents; the only declared warm tone is the cream `{colors.cream}`, and it was not observed on the home page.
- Don't treat the dimmed ABOUT label as a documented state; its values were not measured.

## Responsive Behavior

Measured at a 390px viewport: the page keeps Messina Sans at 14px (72 measured characters) and a 56px size covering 15 measured characters appears where desktop has 108.8px covering 15 characters. The slide counter keeps 14px, weight 400, line-height 14px and letter-spacing -0.28px, and the measured counter block is 31px wide. The navigation element measured 844px tall at 390px wide with 14px, weight 700, uppercase text, against 76.8px at desktop. No h1 or button was detected at this width. Breakpoint widths, header layout and the mobile video crop were not measured.

## Iteration Guide

1. Start with `{colors.canvas}` black and `{colors.ink}` white; add nothing else until a measured value demands it.
2. Put the film full-bleed behind everything and let a title in `{typography.hero-title}` carry the message.
3. Use `{typography.display}` for every small label and pin each to an edge, 24px in from it.
4. If a menu is needed, make it a full-screen `{colors.surface-dark}` panel with `{typography.nav}` links.
5. Write titles as "CLIENT // TITLE" and keep the counter format "01 / 07".
6. Check any new value against `web/data/extracted/chew-productions.json` before adding it.
