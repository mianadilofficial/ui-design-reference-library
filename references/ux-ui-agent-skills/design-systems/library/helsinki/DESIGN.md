---
version: alpha
name: City of Helsinki
category: "Design Systems"
description: "The City of Helsinki homepage (hel.fi) uses HelsinkiGrotesk at weights 400 to 500, a white #ffffff canvas with #1a1a1a ink, square black buttons, a #c2a251 gold hero band with a wave edge and a 64px display headline at -1.2px tracking, plus #f2f2f2 service panels and a pale blue #e8f3fc news box."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-gold: "#c2a251"
  surface-panel: "#f2f2f2"
  ink-muted: "#595959"
  text-input-border: "#808080"
  coat-of-arms-blue: "#0072c6"
  bus-blue: "#0000bf"
  metro-orange: "#fd4f00"
  error: "#b01038"
  surface-notice: "#e8f3fc"
typography:
  display:
    fontFamily: HelsinkiGrotesk, Arial, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: HelsinkiGrotesk, Arial, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: HelsinkiGrotesk, Arial, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-1px"
  subheading:
    fontFamily: HelsinkiGrotesk, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: "-0.4px"
  body:
    fontFamily: HelsinkiGrotesk, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: HelsinkiGrotesk, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: HelsinkiGrotesk, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 8px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 48px
    borderColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 16px 32px
    height: 56px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 10px 4px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 104px 0px 16px
    height: 56px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

hel.fi is the Finnish-language front page of the City of Helsinki, and the capture shows a civic service portal rather than a marketing page. At the top is a thin utility bar of text links (current news, Helsinki near you, open jobs, get involved, do business online, give feedback), then the header with the Helsinki logo (a rounded outlined box with a small tail containing the word Helsinki) next to "Helsingin kaupunki", language links (Suomi, Svenska, English), a globe, search and menu icons. A second row lists the main service areas, each with a chevron dropdown: social and health services, education, housing, city environment and transport, culture and leisure, business and work, and decision-making.

The hero is a gold band with the headline "Hyvää elämää Helsingissä" (Finnish for good life in Helsinki, a translation of the heading text) set large in dark ink, with an evening photograph of the city skyline on the right whose edge is cut by a wave line, and a solid blue rule beneath. A cookie-consent block, "Evästeet hel.fi-sivustolla", sits directly under the hero with two outlined buttons and an orange triangle marker; it is the site's own consent component and is not documented here as brand UI. Below it, "Suositeltuja palveluja" (recommended services) presents four light gray panels with short underlined link lists, a gold band with a heart icon and the statistic "Helsinkiläisiä on 700 000" plus a black button, and a pale-blue box "Tärkeää juuri nyt" (important right now) with dated news links.

The tone is plain and utilitarian. Headings name topics ("Hoida terveyttä", "Kasva ja opi"), links are underlined and descriptive, and each news item carries a timestamp. The imagery is limited to the single hero photograph; everything else is type, icons and flat panels, which keeps the page quick to scan.

## Colors

`canvas` #ffffff is the page ground; `ink` #1a1a1a the main text color by far, with `ink-muted` #595959 for timestamps and secondary notes. `primary` #000000 is the fill of the black buttons, with `on-primary` #ffffff text. `surface-gold` #c2a251 fills the hero band and the statistic band. `surface-panel` #f2f2f2 is the gray of the service panels, and `surface-notice` #e8f3fc is the pale blue of the "important right now" box. `text-input-border` #808080 outlines input fields.

The live page's root variables name the city's palette: gold #c2a251, `coat-of-arms-blue` #0072c6 (also the focus-outline color), `bus-blue` #0000bf (the blue rule under the hero), `metro-orange` #fd4f00 (the cookie triangle marker), `error` #b01038, plus brick, summer, engel, fog, copper, tram, suomenlinna and silver families and a black ramp from `--color-black-5` to `--color-black-90`. The mapping `--hdbt-color-palette-button--primary` is #000 and `--hdbt-color-palette-text--primary` is #1a1a1a, confirming that black buttons and #1a1a1a text are the intended defaults. Browser default link blues are not used; links on the page are underlined in the ink color.

## Typography

The family is HelsinkiGrotesk, loaded at 400, 500 and 700, followed by Arial and generic sans-serif; the root variable `--font-default` names `HelsinkiGroteskPro`. Display sizes are large and tightly tracked: `display` 64px at weight 400 with 64px line height and -1.2px letter spacing for the h1, `heading` 48px at 400 with 48px line height and -1px for section titles, and `subheading` 24px at 500 with 30px line height and -0.4px. `display-mobile` is 40px with 40px line height and -0.8px tracking. `body` is 18px at 400 with 28px line height; `nav` is 16px at 400 with 24px line height; `button-secondary` is 16px at 500 with 20px line height.

The root variables also list `--fontsize-heading-xxl` 4rem, `--fontsize-heading-xl` 3rem, `--fontsize-heading-xl-mobile` 2.5rem, `--fontsize-heading-l` 2rem, `--fontsize-heading-m` 1.5rem, `--fontsize-body-l` 1.125rem, `--fontsize-body-m` 1rem and `--fontsize-body-s` 0.875rem, which match the measured sizes.

Font substitutes: HelsinkiGrotesk is the city's own typeface; the declared fallback is Arial, which is wider and has no 500 weight, so display tracking should be loosened if the fallback is used.

## Layout

The page is a single wide column with consistent side margins, and the header, panels and bands all share that edge. Service panels sit in a two-column by two-row grid, each with a heading and a bulleted list. Full-width bands (gold statistic band, pale blue news box) span the same container. Measured spacing values are 4, 5, 6, 7, 8, 9, 10, 12, 14 and 16px, with larger root variables such as `--spacing-m` 1.5rem and `--spacing-3-xl` 3.5rem. Breakpoints range from `--breakpoint-xs` 320px to `--breakpoint-xxl` 1440px.

## Elevation & Depth

The page is flat. No shadows were measured on buttons or panels in the capture; panels differ from the ground by tone only (#f2f2f2 against white), and the news box by a pale blue tone. The root variables include one shadow, `--box-shadow-m` of 0px 2px 10px 0px at 10 percent black, but nothing in the captured viewport visibly uses it. Separation comes from color blocks, a thin line under the header and the wave-shaped edge (`hds-koros`) on the hero.

## Shapes

Shapes are mostly rectangular. Primary button, `xs`, has an 8px radius, while the secondary "see all" button and cookie buttons are square (0px). Panels and bands have square corners. The most distinctive shape is the wave divider (a "koros" component with `--180deg`, `--basic` and `--diagonal` variants in the page's class names) cutting the hero image edge. The logo is a rounded outline box.

## Components

**button-primary**: black fill, white 18px text, 8px radius, 48px high, 8px by 16px padding, and a 2px white border; it is the "Kysy kaupungista!" button measured by the extractor. **button-secondary**: black fill, white 16px text at 500, 56px high, 16px by 32px padding, square corners (the "Katso kaikki ajankohtaiset" style). **link**: ink-colored, underlined text; nav links also underline on hover. **nav-link**: 16px, 10px by 4px padding. **text-input**: white, 56px high, #808080 border, 16px left padding. **footer**: `ink` fill with white text.

## Design System Architecture

The City of Helsinki publishes the Helsinki Design System (HDS), whose documentation is at https://hds.hel.fi and whose repository is https://github.com/City-of-Helsinki/helsinki-design-system. The repository README, which was opened, describes components, principles, documentation and templates; three packages (`hds-design-tokens`, `hds-core`, `hds-react`); React and CSS implementations; accessibility audits; and links the documentation to hds.hel.fi. The hds.hel.fi pages themselves rendered no readable content in the fetch tool, so no values were taken from them.

The dsUrl is real, and the live page uses HDS: its markup carries `hds-koros`, `hds-notification` and `hds-component` classes, and its root includes `--hds-cookie-consent-height`. The site is also built with the Helsinki Drupal base theme (variables prefixed `--hdbt-`), whose README does not mention HDS, so the exact relationship between the two is not stated here. All color and type values in this file are from the measured page and its root variables.

## Do's and Don'ts

Do keep the page white with #1a1a1a ink and black buttons. Do use gold for large editorial bands and the wave edge on a hero. Do write link text that names the destination and underline links. Do keep radii minimal and the layout flat.

Don't introduce gradients or shadows on panels. Don't use the orange metro color as an action color; it marks the cookie component here. Don't treat cookie consent buttons as brand buttons. Don't use browser default link colors (#0000ee, #551a8b). Don't set body text below 16px.

## Responsive Behavior

The measured h1 reduces from 64px with 64px line height at desktop to 40px with 40px line height at 390px. The root variables define the matching mobile heading size (`--fontsize-heading-xl-mobile` 2.5rem) and a breakpoint scale from 320px to 1440px. Other mobile layouts were not measured.

## Iteration Guide

1. White canvas, #1a1a1a text, one black button style.
2. HelsinkiGrotesk 18px/28px body; 64px/64px display with -1.2px tracking.
3. Gold #c2a251 band with a wave edge for the hero.
4. Group services in #f2f2f2 panels with underlined link lists.
5. Use pale blue #e8f3fc for time-sensitive notices.
6. Keep consent UI separate from brand buttons.
