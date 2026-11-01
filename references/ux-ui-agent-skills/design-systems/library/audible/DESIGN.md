---
version: alpha
name: Audible
category: "Music & Audio"
description: "Audible's US storefront (audible.com): a near-black #000000 content field with white Audible Sans headlines at 700 weight, #ffb333 and #ffa000 pill buttons carrying #010e19 text, pale-blue #a3d4ff title links on dark, a white #ffffff header and footer, and floating rounded book-cover art as the only imagery."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#ffb333"
  on-primary: "#010e19"
  accent: "#ffa000"
  announcement: "#3964f0"
  surface-tile: "#102133"
  ink-link: "#a3d4ff"
  ink-link-hover: "#cde6fe"
  ink-body: "#dae9f9"
  ink-footer: "#1e344d"
  divider: "#c0d2e9"
  hairline: "#4a6687"
  link: "#0e5b9b"
  link-hover: "#1479cf"
  surface-input: "#f1f7fe"
  surface-brand: "#fff4e0"
  error: "#aa0000"
  success: "#26822c"
  caution: "#c38d00"
typography:
  display:
    fontFamily: "\"Audible Sans\", Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 52px
  display-mobile:
    fontFamily: "\"Audible Sans\", Arial, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: "\"Audible Sans\", Arial, sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 42px
  subheading:
    fontFamily: "\"Audible Sans\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18px
  body:
    fontFamily: "\"Audible Sans\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: >-
      "Audible Sans", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Audible Sans\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22px
rounded:
  xs: 1px
  sm: 4px
  md: 16px
  lg: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 50px
  button-secondary:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 42px
  announcement-bar:
    backgroundColor: "{colors.announcement}"
    textColor: "{colors.ink}"
  title-link:
    textColor: "{colors.ink-link}"
    typography: "{typography.subheading}"
  title-link-hover:
    textColor: "{colors.ink-link-hover}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-footer}"
  footer-link:
    textColor: "{colors.ink-footer}"
    typography: "{typography.nav}"
---

## Overview

Audible's homepage (page title "Audible | Listen to Audiobooks, Podcasts, & Originals") is a dark, cover-art-led storefront wrapped in a white utility header and a white footer. A blue promotional strip (`#3964f0`) runs across the top with white copy ("Prime Member Exclusive | $0.99/mo for 4 months + $20 Audible credit") and a small orange "Get this deal" pill. Below it the white header carries the Audible wordmark, "Help", language and currency selectors, an orange "Sign in" pill, a "Browse" control and a wide pill-shaped search field ("Find your next great listen"). The main field then drops to near-black (`#000000`, about 52% of the first screen) with a faint blue glow behind a tilted cluster of floating book covers.

The page measured 1280px wide and 5377px tall with 1288 visible elements. Typography does nearly all of the structural work: a 48px bold promo headline, 36px bold centered section headings ("Read as many books as you can hear", "Goodreads' Member Picks", "New genres that make you take the long way home"), and 14px semi-bold title links under each cover. Imagery is exclusively product: book and podcast covers with rounded corners and a yellow "Only from Audible" corner ribbon on originals. The voice, read from the homepage copy, is upbeat, second-person and short: "Chores can be fun.", "Carry your entire Library", "Audiobooks don't weigh a thing."

## Colors

- **Canvas `#000000`** is the dark content field on which headings, hero copy and the cover carousels sit. **Page body `#ffffff`** is the body/main fill the extractor reports and is what the header and footer bands show.
- **Ink `#ffffff`** is the most-read text color (2569 characters): all headlines on the dark field. **Body ink `#dae9f9`** (695 characters) is the pale blue-grey of paragraphs such as "Listen on the go with bigger, simplified controls". **Link ink `#a3d4ff`** (998 characters) colors cover titles and "By: author" links on dark; on hover it measured `#cde6fe` (rgb(205, 230, 254)) with no background change.
- **Primary `#ffb333`** is the fill of "Get this deal" and "Try for $0.00" with **on-primary `#010e19`** text. **Accent `#ffa000`** is the fill of the header "Sign in" pill. The stylesheet names these `--adbl-accent-hover` (`#ffb333`) and `--adbl-accent` (`#ffa000`), with `--adbl-accent-pressed` `#ff8909` and `--adbl-on-accent` `#010e19`.
- **Announcement `#3964f0`** is the top promo strip's measured background area.
- **Surface tile `#102133`** is the dark navy of the hero offer tabs and genre tiles; **footer ink `#1e344d`** (200 characters) colors footer links; **divider `#c0d2e9`** and **hairline `#4a6687`** are the measured border colors (`#4a6687` on 9 elements).
- **Semantic colors** are published as CSS variables on `:root` and recorded here as measured: link `#0e5b9b` (hover `#1479cf`), error `--adbl-attention` `#aa0000`, success `#26822c`, caution `#c38d00`, brand surface `#fff4e0`, input surface `#f1f7fe`.

The browser default `#0000ee` was reported on 13 characters of unstyled link text and is not a brand color; it is dropped.

## Typography

One family, **Audible Sans**, carries 4648 of the page's 4682 characters; Arial accounts for the remaining 34. It loads in three weights, 400, 600 and 700. Character counts by weight: 600 (2076), 400 (1811), 700 (795).

- Display (promo headline): 48px / 52px, weight 700, white. Mobile pass: 30px / 36px.
- Heading (section titles): 36px / 42px, weight 700, centered. Mobile pass: 24px / 30px.
- Subheading (cover titles, genre labels such as "Literature & Fiction"): 14px / 18px, weight 600.
- Body: 16px / 22px, weight 400. Mobile pass: 14px / 18px.
- Button and nav: 16px / 24px at 400 for buttons (a system-ui fallback stack follows Audible Sans), 16px / 22px at 600 for footer and utility links.

The most-used sizes by character are 16px (2525), 18px (912), 14px (689), 36px (245), 24px (190) and 48px (85). Letter-spacing is `normal` except one 12px style with `1px`, used on 2 characters. If Audible Sans is unavailable, use a neutral humanist sans such as Arial at the same sizes and weights; the page's own fallback is Arial.

## Layout

The header is a two-row white band: logo and utilities on the first row, the Browse control and the search pill on the second. The hero is two columns inside the dark field: left, headline, subline, two buttons ("Get this deal" filled, "See all plans" as a ring on black) and fine print; right, a loose tilted collage of six covers. Beneath it a row of three offer tabs ("Prime member", "Save on audiobooks with membership", "The Witch") sits centered. Every later section repeats one pattern: a centered 36px heading, a 16px subline, and a row of six equal covers with a title link and author line under each, ending with a right-aligned "View all" link or a row of genre tiles.

Measured spacing is built on small steps: gaps of 4px (54 uses), 2px (35), 8px (29), 48px (20), 16px (16), 24px (14), 12px (10) and 32px (7); paddings of 16px (39), 8px (37), 12px (31), 4px (20) and 48px (9). Section-level breathing room is large against the dense 4/8/16px component rhythm. Density is moderate: six covers per row, generous dark margins, no sidebars.

## Elevation & Depth

Depth comes from color and glow, not from shadow stacks. The only measured box-shadows are `rgba(0, 0, 0, 0.15) 0px 3px 5px 0px` (12 elements), `rgba(0, 0, 0, 0.05) 0px 3px 5px 0px` (1) and `rgba(0, 0, 0, 0.15) 2px 2px 4px 0px` (1). The stylesheet declares drop-shadow alpha variables `0.05` and `0.15`. In the capture the hero's depth is a blue radial glow behind the cover cluster and the focused offer tab's blue outline; covers are separated from the black field by their own artwork and an outline variable (`--adbl-product-cover-outline` `#00000026`). A scrim variable `--adbl-scrim` `#010e19a6` is declared; it was not seen on the captured page and is not documented as brand UI.

## Shapes

Pills define actions: every measured button is `9999px` (73 elements use that radius). The search field is a long pill. Containers use a small ladder: `4px` (10 elements), `16px` (20), `24px` (13) and `1px` (1). Cover art uses a percentage-based clamp radius, `clamp(8%, -999900% + 1.0499e+06px, 14%)` (46 elements), so corners scale with the tile. The hero offer tabs and genre tiles round at the larger 16 to 24px steps. The extractor's "card" candidates (318 by 318px divs labelled "Prime member offer" and "The Witch", Arial 13.3333px, radius 9999px) were not tied to a visible card style, so no card component is documented.

## Components

- **Button primary**: `adbl-button` custom element, "Get this deal", fill `#ffb333`, text `#010e19`, 16px/400, line-height 24px, radius `9999px`, 50px tall and 139px wide; the inner anchor has `12px 16px` padding. "Try for $0.00" measured 58px tall, 149px wide, 16px padding.
- **Button secondary**: "Sign in", fill `#ffa000`, same text and radius, 42px tall and 87px wide, anchor padding `8px 12px`.
- **Ring button**: "See all plans" appears as a pill with a light outline on the dark field in the capture; the extractor recorded no outlined CTA, so its numbers are not measured.
- **Announcement bar**: full-width `#3964f0` strip, white text, one small orange pill.
- **Title link**: `#a3d4ff`, 14px/600; hover `#cde6fe` text only.
- **Cover tile**: rounded cover with title link and "By:" author in smaller text; originals carry a yellow corner ribbon.
- **Search field**: wide rounded field with magnifier icon and the placeholder "Find your next great listen"; the stylesheet declares `--adbl-background-input` `#f1f7fe`. Its box numbers were not measured.
- **Footer**: white `#ffffff` band, 146px tall, links in `#1e344d` at 16px/600 with 22px line-height (Help Center, Contact Us, Conditions of Use, Privacy Notice and others).

## Design System Architecture

Audible publishes no public design system, brand guidelines page, or token package. The About page (https://www.audible.com/about) lists no brand resources, the homepage (https://www.audible.com/) links only to Accessibility, Help and legal pages, and the Audible GitHub organization (https://github.com/audible) lists a single repository, a fork of a JavaScript style guide. The de-facto system is visible in shipped code: components are custom elements prefixed `adbl-` (for example `adbl-button`), colors and states are `:root` custom properties prefixed `--adbl-` (the page's `:root` declares 102 custom properties in total), Tailwind utility variables (`--tw-ring-*`, `--tw-shadow-*`) are present, the only web fonts are `Audible Sans` and an icon font named `brickcity-icons`, and the variable names follow a role-and-state scheme: `--adbl-link`, `--adbl-link-hover`, `--adbl-link-pressed`, `--adbl-link-visited`, `--adbl-surface-*`, `--adbl-border-*`, `--adbl-gradient-*-start` / `-end` (named gradients such as emerald, sapphire, sunstone, coral, twilight). The declared values include `--adbl-background` `#ffffff` and `--adbl-foreground` `#f1f7fe`; none of the measured custom properties is `#000000`, the color of the dark content field.

## Do's and Don'ts

- Do set headlines in Audible Sans 700, white on the `#000000` field, centered, at 36px for sections and 48px for the hero.
- Do use `#ffb333` pills with `#010e19` text for the main offer action and `#ffa000` for the header sign-in action.
- Do let cover art carry the imagery; keep covers rounded and arrange six per row.
- Do use `#a3d4ff` for title links on dark and `#1e344d` on the white footer.
- Don't use shadows to build hierarchy; use color blocks, glow and outlines.
- Don't use `#0000ee` or other browser default link colors.
- Don't give buttons square corners; the measured action radius is `9999px`.
- Don't reuse the `#3964f0` strip color as general UI chrome; it is measured only on the campaign banner.

## Responsive Behavior

Measured in the 390px mobile pass: display text 30px/36px (48px/52px on desktop); heading 24px/30px (36px/42px); body 14px/18px (16px/22px); the primary button "Get this deal" 16px/400 at 48px tall and 128px wide (50px and 139px on desktop); footer links 14px/600 with 18px line-height (16px/22px on desktop); footer nav 68px tall against 76px on desktop. The mobile character-size histogram shifts toward smaller sizes: 16px (1768), 14px (980), 18px (888), 12px (526), 24px (245), 30px (85). Breakpoint widths, how the cover rows reflow, and the header or search behavior at narrow widths were not measured.

## Iteration Guide

1. Start with three surfaces: `#000000` field, `#ffffff` header/footer, `#102133` tiles; add the `#3964f0` strip only for campaign banners.
2. Set all copy in Audible Sans (400 body, 600 labels, 700 headings); keep sizes to 14, 16, 24, 36 and 48px.
3. Build actions as 9999px pills: `#ffb333` for the hero offer, `#ffa000` for header sign-in, text `#010e19`.
4. Add semantic states from the declared variables only: link `#0e5b9b`, link hover `#1479cf`, error `#aa0000`, success `#26822c`, caution `#c38d00`.
5. Keep section rhythm: centered 36px heading, 16px subline, six covers, "View all".
6. Measure a new page before extending: `node web/scripts/extract-tokens.mjs --slug=audible--<page> --url=<url> --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=audible`.
