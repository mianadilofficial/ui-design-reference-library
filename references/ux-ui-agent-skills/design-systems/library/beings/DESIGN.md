---
version: alpha
name: Beings
category: "Culture & Events"
description: "Beings (beings.co), the Aotearoa New Zealand directory of POC, Rainbow and Disabled talent: a white page with deep brown #1b0800 type, an oversized BEINGS wordmark, square-cornered photography, the Die Grotesk and Bonto faces at weight 400, and a skin-tone palette running from #fff4ec to #3d1801 with peach #f6c9a1 as the accent."
colors:
  canvas: "#ffffff"
  ink: "#1b0800"
  ink-deep: "#3d1801"
  primary: "#f6c9a1"
  surface-skin-light: "#fff4ec"
  skin-light-2: "#ffe2cc"
  skin-light-3: "#ffc79b"
  skin-medium: "#e6975e"
  skin-medium-2: "#804627"
  skin-profile: "#db9a68"
  home-bg: "#381a06"
  join-bg: "#fae3cf"
  join-ink: "#78492d"
  shortlist-bg: "#78492d"
  shortlist-ink: "#fdf4ed"
  grey: "#999999"
  skip-link-bg: "#000000"
typography:
  display:
    fontFamily: "\"Die Grotesk B Bold\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24.2px
  heading:
    fontFamily: Bonto, sans-serif
    fontSize: 58.88px
    fontWeight: 400
    lineHeight: 58.88px
    letterSpacing: "-1.7664px"
  body:
    fontFamily: "\"Die Grotesk C Black\", sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 30.55px
  body-mobile:
    fontFamily: "\"Die Grotesk B Bold\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  link:
    fontFamily: "\"Die Grotesk B SemiBold\", sans-serif"
    fontSize: 15.008px
    fontWeight: 400
    lineHeight: 21.0112px
  menu-mobile:
    fontFamily: "\"Die Grotesk B SemiBold\", sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 34px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 84px
components:
  skip-link:
    backgroundColor: "{colors.skip-link-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 8px
    height: 37px
  nav-link:
    textColor: "{colors.ink}"
  text-block:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  image:
    rounded: "{rounded.none}"
---

## Overview

`https://beings.co/` (title "Beings — Discover Aotearoa’s POC, Rainbow and Disabled talent.") is an online directory "to represent, explore, discover, and cast Aotearoa's POC, Rainbow, and Disabled talent", founded by Léon Bristow in 2022 according to its About page. The home page is an editorial, poster-like layout, 5,979px tall at 1280px wide, with only 127 visible elements.

The first screen is a single dense type-and-image composition. A thin top row of tiny uppercase links runs across the full width: "BEINGS" (underlined) at the left, "TALENT" and "ABOUT" in the centre and "PLAY, KOHA, JOIN, SHORTLIST(0)" at the right. Directly under it a gigantic, tightly set "BEINGS®" wordmark in deep brown spans most of the width. Below, two photographs sit in a staggered two-column arrangement: a tall high-contrast portrait on the left edge and a second, lighter photograph of a dancing figure in a corridor, offset lower in the right column. The tagline "Discover Aotearoa’s POC, Rainbow and Disabled talent." sits in bold brown type beside the top of the first photograph, and a thin hairline circle floats between the images.

The page text names the site's sections (Talent, About, Play, Koha, Join, Shortlist), uses te reo Māori and English together ("Tātou tātou. Nothing about us without us.") and states plainly: "If you're looking to tick a box, you've come to the wrong place." The capture shows blank white space below the second photograph, so the lower sections are described only from measurements and declared variables.

## Colors

The palette is a deliberate range of skin tones around a near-black brown, declared as custom properties with names such as `--light-skin`, `--medium-skin` and `--dark-skin`.

- **Page and ink:** `canvas` `#ffffff` (5,172 area units) and `surface-skin-light` `#fff4ec` (5,120; declared as `--light-skin` and `--talent-background`) are the two largest backgrounds. `ink` `#1b0800` (95 characters as text, 922 area units as a background, declared as `--dark-skin`, `--black` and `--talent-color`) colours the wordmark, tagline and nav links; `ink-deep` `#3d1801` is the declared `--dark-skin-2`.
- **Accent:** `primary` `#f6c9a1` is the most-read text colour (607 characters) and is declared as `--home-color` and `--talent-accent`. `surface-skin-light` `#fff4ec` also measures as a text colour (474 characters).
- **Skin ramp:** `skin-light-2` `#ffe2cc`, `skin-light-3` `#ffc79b`, `skin-medium` `#e6975e`, `skin-medium-2` `#804627` and `skin-profile` `#db9a68` (`--profile-dark-theme-color`) complete the declared range.
- **Section themes:** the stylesheet declares colour pairs per section: home (`--home-color` `#f6c9a1` on `--home-background` `#381a06`, tokenised as `home-bg`), talent (`#1b0800` on `#fff4ec`), join (`--join-color` `#78492d`, tokenised as `join-ink`, on `--join-background` `#fae3cf`, tokenised as `join-bg`, with `--join-accent` `#381a06`) and shortlist (`--shortlist-color` `#fdf4ed`, tokenised as `shortlist-ink`, on `--shortlist-background` `#78492d`, tokenised as `shortlist-bg`). Which of these sections render in the capture's lower half is not measured.
- **Utility:** `grey` `#999999` is the declared `--grey`; `skip-link-bg` `#000000` is the fill of the "Skip to main content" accessibility link (6 area units).

## Typography

The site loads six custom faces, each at a single weight of 400 because every weight is its own file: Die Grotesk B SemiBold (454 measured characters), Die Grotesk C Black (452), Die Grotesk B Bold (227), Die Grotesk B Black (57) and Bonto (6); Die Grotesk C Bold is also declared. Only `sans-serif` is declared as a fallback, so no other substitute is documented. All measured font-weight values are 400 (1,196 characters).

- `display` Die Grotesk B Bold 22px / 400 / 24.2px for the h1 tagline.
- `heading` Bonto 58.88px / 400 / 58.88px with -1.7664px letter-spacing for the "Talent" section title; 58.88px equals the declared `--largeBonto` of 4.6vw at the measured 1280px width, so this size is viewport-relative.
- `body` Die Grotesk C Black 26px / 400 / 30.55px for the large statement paragraph ("What we put on stage and screen…") in peach.
- `link` Die Grotesk B SemiBold 15.008px / 400 / 21.0112px (the base text style, measured on the skip link and the `body` element).
- `menu-mobile` Die Grotesk B SemiBold 40px / 400 / 34px uppercase, the size and line height the stylesheet declares as `--mobileMenu` (2.5rem with a 0.85 line-height factor); `body-mobile` Die Grotesk B Bold 14px / 400 / 16.8px.

Sizes by characters: 26px (452), 12px (366, the tiny uppercase nav labels; `--smallBold` is .75rem), 22px (185), 16px (167), 15.008px (20) and 58.88px (6). The stylesheet pairs each size variable with a line-height factor (`--body` .938rem with 1.4, `--mediumBold` 1.375rem with 1.1, `--largeBold` 1.875rem with 1.175, `--mediumBlack` 1.625rem with 1.1, `--smallBonto` 1.375rem, `--mediumBonto` 2.25rem, `--largeBonto` 4.6vw, `--hugeBonto` 7.2vw with .98, `--huge` 4.4vw) so type and leading scale together.

## Layout

The layout is built from a 12px base unit: `--gutter` is .75rem and the stylesheet declares multiples `--gutter-2` through `--gutter-12` plus half, quarter and three-quarter steps, all as `calc()` of it. Measured paddings are 12px (12 uses), 8px (2), and single 84px, 634px and 6px values; the one measured gap is 12px (7 uses). A control height of 38px is declared (`--control-height`).

In the capture the composition is asymmetric. The header links are spread to the full width; the wordmark nearly fills it; the two images sit side by side in two columns, offset vertically so the left image starts under the wordmark and the right image starts lower; the tagline occupies the strip right of the first image. There is no visible container, card, divider or box: text, wordmark and photographs are placed directly on the white page.

## Elevation & Depth

None. No box-shadow was measured, and no borders were measured. Depth comes from the contrast between the black-brown wordmark and portrait and the white field. The only linework is a thin circular outline drawn between the two photographs.

## Shapes

All corners are square. No border-radius greater than 0 was measured on any element (the extracted radius list is empty), so the one radius token is `none` at 0px. Photographs are rectangular and sit edge to edge with no rounding; the thin circle in the capture is a line graphic, not a measured element radius.

## Components

- **Top navigation row:** tiny (12px by characters) uppercase links in `{colors.ink}`; hover records for TALENT, ABOUT, KOHA, JOIN, PLAY and SHORTLIST(0) show the colour staying `rgb(27, 8, 0)` and the background staying transparent. The current item ("BEINGS") is underlined. The Shortlist label carries a live count, "SHORTLIST(0)".
- **Wordmark:** a very large uppercase "BEINGS" with a small ® mark in `{colors.ink}`.
- **Tagline:** 22px Die Grotesk B Bold in `{colors.ink}`, two lines.
- **Photograph:** rectangular, square-cornered, full colour or high-contrast black and white; no caption in the capture.
- **Statement block:** 26px Die Grotesk C Black text in `{colors.primary}` (measured box 1,256px wide by 122px tall).
- **Skip link:** a black (`{colors.skip-link-bg}`) 151px by 37px "Skip to main content" link with 8px padding and white 15.008px text.
- **Empty-state message:** the Shortlist reads "Your shortlist is empty, please add some people".

## Design System Architecture

No public design-system or brand-guideline page was found: neither the home page nor `https://beings.co/about` links brand guidelines, a press kit, a studio credit or GitHub (the home page links Instagram, a contact e-mail and partner websites). The de-facto system is 65 custom properties on `:root`: a skin-tone colour ramp (`--light-skin`, `--light-skin-2`, `--light-skin-3`, `--medium-skin`, `--medium-skin-2`, `--dark-skin`, `--dark-skin-2`), per-section colour triples (`--home-*`, `--talent-*`, `--join-*`, `--shortlist-*`), a type scale where each size has a `-l` line-height companion, fluid sizes in `vw`, and gutter multiples. Partners credited on the page include Creative New Zealand, the New Zealand Film Commission and Auckland Pride.

## Do's and Don'ts

- Do set type and imagery directly on the white page with no cards, boxes or rounded corners.
- Do use one oversized wordmark as the focal element and stagger photographs in two columns.
- Do keep body text dark brown `{colors.ink}` on light and peach `{colors.primary}` on dark.
- Do use each Die Grotesk face at weight 400 (the weight is in the face, not in `font-weight`).
- Don't introduce a hue outside the brown-to-peach skin-tone range.
- Don't add shadows, borders or gradients; none was measured.
- Don't assume the lower sections' appearance beyond the declared colours and measured text styles.

## Responsive Behavior

Measured at 390px: the mobile pass records the menu item "HOME" as the h1 role, set in Die Grotesk B SemiBold 40px / 400 / 34px uppercase (117px by 56px); the statement paragraph measures Die Grotesk B Bold 14px / 400 / 16.8px (366px by 134px) against 26px / 30.55px on desktop. Mobile sizes by characters are 14px (584), 10px (185), 17.008px (69) and 40px (50), against 26px (452), 12px (366), 22px (185), 16px (167), 15.008px (20) and 58.88px (6) on desktop. The mobile pass found no h2, button, nav or card role. The `--huge`, `--largeBonto` and `--hugeBonto` sizes are declared in `vw`, so they change with the viewport width; image sizes, column changes and breakpoints are not measured.

## Iteration Guide

1. Set `canvas` `#ffffff`, `ink` `#1b0800`, `primary` `#f6c9a1` and `surface-skin-light` `#fff4ec`.
2. Load the Die Grotesk B and C faces and Bonto, each at font-weight 400; use `--largeBonto` (4.6vw) for section titles.
3. Build a full-width row of 12px uppercase links, then a giant wordmark.
4. Place two square-cornered photographs in a staggered two-column layout, with a two-line 22px tagline beside the first.
5. Use skin-tone section themes (light, peach on dark brown, join and shortlist pairs) for deeper sections.
6. Space everything in multiples of the 12px gutter; check mobile against the 390px values above.
