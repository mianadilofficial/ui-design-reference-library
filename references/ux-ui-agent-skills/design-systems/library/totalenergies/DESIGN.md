---
version: alpha
name: TotalEnergies
category: "Energy & Climate"
description: "TotalEnergies corporate site: white and pale blue-grey canvas, slate ink #374649, signature red #e70000 on outlined pill buttons (80px radius), Nunito headlines over Roboto body, 20px-radius photo cards and a Bootstrap-derived CSS base."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f9fa"
  ink: "#374649"
  tag-red: "#ed0000"
  on-primary: "#ffffff"
  surface-card: "#f5f9fb"
  primary: "#e70000"
  accent-green: "#00a55e"
  accent-blue: "#285aff"
  accent-indigo: "#4632ff"
  ink-subtle: "#495057"
  nav-text: "#555555"
typography:
  display:
    fontFamily: Nunito, sans-serif
    fontSize: 48px
    fontWeight: 400
    letterSpacing: 0.1px
  display-mobile:
    fontFamily: Nunito, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.1px
  heading:
    fontFamily: Nunito, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 0.1px
  subheading:
    fontFamily: "\"Roboto Medium\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.1px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"Roboto Medium\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.1px
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  link:
    fontFamily: "\"Roboto Medium\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 1.5px
  sm: 2.5px
  md: 5px
  lg: 10px
  xl: 20px
  2xl: 40px
  3xl: 80px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 7.5px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 15px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 8px 24px
    height: 42px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 7.5px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

The TotalEnergies home page reads as a corporate editorial site rather than a retail one. A white header carries the multicolour logo and a thin utility row (Clients websites, mail, globe, search, language "En"), followed by a six-item main menu: Our Company, Sustainability, Investors, Newsroom, Careers and News. Below it a large photographic hero with overlaid title art sits beside a text column, then four dated news teasers (Company, Innovation, Gas), then a statistics band with oversized numerals ("40%", "> 100,000", "100 years"), a full-bleed industrial photograph, three rounded photo cards and a closing statement band. The measured document is 4,993px tall at 1280px width and carries 554 visible elements.

The voice is plain and declarative: "We provide the energy the world needs: ever more affordable, more sustainable, more reliable and accessible to as many people as possible." Headlines are set in a light rounded sans, body copy in a thin Roboto, and the only saturated action colour is a pure red used for links, outlined pills and small category chips.

## Colors

The canvas is `{colors.canvas}` (#ffffff) with two cool off-whites layered on top: `{colors.page-largest}` (#f7f9fa) covers the largest painted area on the page and `{colors.surface-card}` (#f5f9fb) fills the project cards. Body ink is `{colors.ink}` (#374649), a blue-slate rather than black, measured on 2,214 characters. Secondary text is `{colors.ink-subtle}` (#495057) and the navigation uses `{colors.nav-text}` (#555555).

The action colour is `{colors.primary}` (#e70000): link text (304 characters), the 1px border and label of every outlined pill, and the "Find out more" card links. A slightly different red, `{colors.tag-red}` (#ed0000), fills small solid chips such as "Innovation" with white `{colors.on-primary}` text. Headline accents are drawn from a wider spectrum that the capture shows on sector headings and numerals: `{colors.accent-green}` (#00a55e) on an h2, `{colors.accent-blue}` (#285aff) and `{colors.accent-indigo}` (#4632ff) on news-tab titles and statistics. The hero numeral "40%" uses a 45-degree gradient from #058b44 to #40a900 clipped to the text, which is a measured style but not a token.

## Typography

Headlines use Nunito (`{typography.display}`: 48px, weight 400, letter-spacing 0.1px; `{typography.heading}`: 30px on a 40px line). Card titles and h3 use "Roboto Medium" at 18px/24px (`{typography.subheading}`), body copy is Roboto at 16px with weight 300 and 24px line height (`{typography.body}`), navigation is Roboto 15px/22.5px (`{typography.nav}`) and the pill buttons and links use "Roboto Medium" 16px weight 500 (`{typography.button}`, `{typography.link}`). Across the page 16px dominates (1,407 characters), followed by 30px (396) and 18px (239).

The loaded font files are Roboto (regular, Medium, Bold) and Nunito, so no proprietary face needs substituting. Light 300 body weight against 400 Nunito headlines gives a deliberately airy page; do not bold body copy to create emphasis, use the Medium family instead.

## Layout

Content sits in a centred container at a 1280px measurement width. The statistics band places a text column, two numerals and a line-drawn globe illustration on one row. Cards sit three across at about 377px wide and 426px tall. Common paddings measured on the page are 15px (55 uses), 20px (26), 10px, 25px and 30px; flex or grid gaps are 10px (20 uses), 20px (16) and 5px (12). The spacing scale in the front matter lists the measured steps from 4px to 17px.

Section rhythm alternates white and pale grey bands, with one full-bleed photograph acting as a divider before the card row, whose white panel overlaps the image with a large top radius.

## Elevation & Depth

Depth is almost absent. The measured box shadows are tiny and few: `rgba(0, 0, 0, 0.1) -6px 8px 6px -5px` (3 elements), `rgb(206, 206, 206) 0px 0px 30px 5px` (1) and `rgba(0, 0, 0, 0.02) 0px 5px 10px 0px` (1). The header floats with a faint shadow; cards separate from the page by tint (#f5f9fb on #ffffff) and by radius, not by shadow. Do not add drop shadows to cards or buttons.

## Shapes

Radius is the most visible shape signal. Photo cards use 20px (`{rounded.xl}`, 17 elements, the most common value). Outlined pill buttons use 80px (`{rounded.3xl}`), and carousel controls and the "Stop automatic scrolling" control use 40px (`{rounded.2xl}`). Small chips use 5px and 2.5px, 10px appears on 3 elements, and one panel uses an asymmetric `0px 20px 20px 0px` radius. The tab strip under the hero is square. Photography is cropped to the rounded card top with no border.

## Components

**Primary button.** Measured on the "Find out about our jobs" link: white fill, `{colors.primary}` 1px border and label, "Roboto Medium" 16px, 8px 24px padding, 42px tall, 80px radius. This outlined pill is the brand's action style; a second instance, "Our projects and achievements", is 275px wide. On hover the control fills solid red in the measured "Stop automatic scrolling" button.

**Card.** `{colors.surface-card}` background, `{rounded.xl}` radius, a photo at the top, a coloured category chip (Oil, Wind, Decarbonization, Innovation), a two-line 18px Medium title and a right-aligned red "Find out more" link with a small triangle glyph. No border, no shadow.

**Navigation.** Header text in `{colors.nav-text}`, 15px Roboto, 7.5px padding on each link; the Newsroom item carries an external-link glyph. The language switch and search are icons in the utility row.

**Link.** `{colors.primary}` text, Roboto Medium 16px, no underline measured at rest.

**Footer.** White background, `{colors.ink}` text at 13px, 188px tall.

## Design System Architecture

No public design-system or brand-guideline page was opened for this site, so the system described here is the de-facto one visible in shipped CSS. The root variables follow the Bootstrap 4 naming scheme (`--primary`, `--secondary`, `--breakpoint-sm: 35.9375em`, `--breakpoint-md: 48em`, `--breakpoint-lg: 61.875em`, `--breakpoint-xl: 75em`) with the brand re-pointing `--primary` and `--blue` to #285AFF, `--dark` to #707173 and `--light` to #f8f9fa. Those root values are framework tokens; the red used on the page is not exposed as a root variable, so it is applied through component classes. One layout variable, `--scroll-height: calc(100vh - 123px)`, belongs to the sticky header.

Type is delivered through three Roboto files and one Nunito file, and the family names ("Roboto Medium", "Roboto Bold") are separate face names rather than weights of one family, which is why the same 500 weight appears under two family strings.

## Do's and Don'ts

- Do keep the page white and pale grey; use #374649 for reading text.
- Do use red only for links, outlined pills and tiny chips.
- Do round photo cards at 20px and pills at 80px.
- Do set headlines in Nunito at weight 400 with 0.1px letter-spacing.
- Don't fill primary buttons with solid red by default; the measured resting state is outlined.
- Don't add heavy shadows or gradients to surfaces.
- Don't use the Bootstrap blue as a button colour; it appears on headline text, not on controls.
- Don't use third-party widget, consent or scroll controls as references for brand components.

## Responsive Behavior

The extraction recorded one mobile pass at 390px. At that width the h1 is Nunito 24px weight 400 on a 32px line (down from 48px on desktop), and body copy stays Roboto 16px weight 300 on a 24px line. The most common mobile sizes are 16px (1,174 characters), 24px (351) and 18px (350). Breakpoints declared in the root variables are 35.9375em, 48em, 61.875em and 75em. Column counts, menu collapse behaviour and card stacking on mobile were not measured.

## Iteration Guide

1. Start from `{colors.canvas}` with `{colors.page-largest}` bands; put cards on `{colors.surface-card}`.
2. Set text in `{colors.ink}`; reserve `{colors.primary}` for links and outlined pills.
3. Headlines in Nunito 30px/40px or 48px; body in Roboto 300 at 16px/24px.
4. Build buttons as 42px-tall, 8px 24px, 1px red border, 80px radius.
5. Round cards at 20px, avoid shadows, and use coloured chips for category labels.
6. When adding numbers, use the measured scale only; anything not in the front matter should be measured first.
