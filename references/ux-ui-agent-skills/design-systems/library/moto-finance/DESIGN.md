---
version: alpha
name: "Moto Card"
category: "Tech & AI"
description: "Moto Card (moto-card.com), a members-only metal travel and wealth card, in near-black #080808 with #e1e5e5 silver text and pill buttons (full radius, 52px tall), set in Neue Montreal 500 with 64px uppercase headings and -0.512px tracking."
colors:
  canvas: "#080808"
  ink: "#e1e5e5"
  primary: "#e1e5e5"
  on-primary: "#080808"
  surface: "#ffffff"
  surface-2: "#edefef"
  ink-3: "#666f76"
  ink-5: "#c0c4c6"
  ink-6: "#3a3e40"
  hairline: "#20272c"
  primary-hover: "#dfe3e3"
  on-primary-hover: "#626b72"
typography:
  display:
    fontFamily: Neuemontreal, Arial, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: "-0.512px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Neuemontreal, Arial, sans-serif
    fontSize: 37.3464px
    fontWeight: 500
    lineHeight: 37.3464px
    letterSpacing: "-0.298771px"
    textTransform: uppercase
  subheading:
    fontFamily: Neuemontreal, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 23.4px
    letterSpacing: "-0.054px"
  button:
    fontFamily: Neuemontreal, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "-0.048px"
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 9.6px
  s4: 10px
  s5: 12px
  s6: 12.8px
  s7: 14px
  s8: 14.4px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 18px 24px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 18px 24px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
---

# Moto Card

## Overview
The measured site is www.moto-card.com (page title "Moto Card | Homepage", language en), the invitation-style site of a membership payment card. The hero reads "BUILT FOR MODERN WEALTH", the second section "INFRASTRUCTURE FOR HOW YOU MOVE" with the line "At home, abroad, and everywhere in between, Moto gives its members a quieter way to move.", and the footer "A QUIETER WAY TO MOVE THROUGH THE WORLD". The single action repeated through the page is "Apply for Access". Body copy mentions that "Membership includes preferred rates and exclusive experiences" and a "Hotels" category appears as a heading. The footer carries "Moto Support" and an App Store badge ("Download on the App Store").

The capture shows a cinematic, dark, product-first page. A header strip with the Moto logo at the left and an "Apply for Access" pill at the right sits above a hero of black rock with a metal card standing on a plinth. A second section places a half-globe at night with small floating status chips ("Transaction Successfull", "Jet Booked", "Hotel Booked") and a thin vertical line leading down the page. A "W. Site of the Day" award widget is visible on the right edge; it is a third-party badge and is not part of the brand UI. The mood is luxurious and hushed: matte black, silver type, 3D rendering with copy that sells discretion rather than features. The page is 11033px tall at 1280px width.

## Colors
`{colors.canvas}` is near-black #080808 (the dark sections, 1174 weighted area, and the footer). Larger measured areas are white `{colors.surface}` (#ffffff, 2964) and light grey `{colors.surface-2}` (#edefef, 1536), which are light sections further down the page, where headings are #080808 (the most-read text color, 9856 weighted characters). On dark areas, `{colors.ink}` and `{colors.primary}` are the same silver #e1e5e5 (499 weighted characters), used for headings and as the fill of the primary pill. Supporting greys: `{colors.ink-5}` (#c0c4c6) for body copy on dark, `{colors.ink-3}` (#666f76) for muted text on light (416), `{colors.ink-6}` (#3a3e40) and #838a8f for fine text. `{colors.hairline}` (#20272c) is the border color of the App Store badge; a dark blue-grey #1c2227 fills the secondary pill. `{colors.on-primary}` (#080808) is the text color on the silver pill. Hover moves the primary pill to `{colors.primary-hover}` (#dfe3e3) with `{colors.on-primary-hover}` (#626b72) text.

The root variables name the greys (`--_colors---grey500` #666f76, `--_colors---grey400` #838a8f, `--_colors---grey700` #20272c, `--_colors---nav_color` #e1e5e5, and a `--_colors---dark900` #08080a that is close to, but not the same as, the measured #080808).

## Typography
One typeface is used for all 12216 weighted characters: Neue Montreal (loaded as "Neuemontreal", weights 400 and 500) with Arial as fallback, plus the webflow-icons font. Only weight 500 appears on rendered text. No foundry source was opened.

`{typography.display}`: 64px, weight 500, line-height 64px, letter-spacing -0.512px (-0.008em), uppercase (hero and section headings). `{typography.display-mobile}`: 37.3464px, 37.3464px line-height, -0.298771px, uppercase. `{typography.subheading}`: 18px, line-height 23.4px, -0.054px (card titles such as "Hotels", and body at the same size). `{typography.button}`: 16px, line-height 16px, -0.048px. Other measured sizes: 20px (4211 weighted characters), 30.72px, 12px, 52px, 14px, 42px, 24px and 8px (the App Store badge). Tracking is a constant -0.003em on text and -0.008em on display. Headings are uppercase and body is sentence case, so hierarchy is made with size and case, not weight.

## Layout
The desktop page is 1280px wide and 11033px tall. The root defines `--container-small` 60rem, `--container-medium` 100rem, `--padding-section-l` 8rem and a type scale in rem (`--text--body` 1.6rem, `--text--h5` 1.8rem, `--text--h3` 4.2rem, `--text--text-medium` 1.8rem). Sections are centered with a single column of heading, subline and button, separated by generous vertical space (the hero block measures 800px tall, the footer 917px). Gaps measured: 8px and 12px (14 each), 32px (12), 24px and 62px (10 each), 4px, 10px, and large gaps of 200px, 240px and 280px; paddings: 16px (22), 24px, 32px, 8px, 18px, 14px, 22px, 64px and 68px. The tokens `{spacing.s1}` to `{spacing.s10}` list 4px to 18px.

## Elevation & Depth
No box-shadow was measured. Depth is made by photography and 3D rendering (rock, plinth, card, globe glow), a faint translucent chip fill (#12191c85) behind the status labels, and light-on-dark contrast. Do not add CSS shadows.

## Shapes
Radii measured: 1267.2px on eight elements (a full pill, `{rounded.pill}`: the Apply for Access buttons) and 4px on two (`{rounded.xs}`, the App Store badge). The floating status chips in the capture are also pill-shaped. Everything else is square.

## Components
**Primary button** (`{components.button-primary}`, `{components.nav-link}`): silver (#e1e5e5) fill, #080808 text, Neue Montreal 16px weight 500, padding 18px 24px, 52px tall, 253px wide, pill radius ("Apply for Access"). Hover: fill #dfe3e3, text #626b72 (`{components.button-primary-hover}`). **Secondary button**: #1c2227 fill with #e1e5e5 text, 14px, padding 16px 32px, 48px tall (the header "Apply for Access"). **App Store badge**: 8px text, 1px solid #20272c border, 4px radius, padding 8px 16px 8px 12.8px, 41px tall. **Links** (`{components.link}`): 16px, 20.8px line-height ("Moto Support"). **Status chips**: dark translucent pills with a check icon and white 12px text. **Footer** (`{components.footer}`): #080808 background with the closing statement and the same silver pill.

## Design System Architecture
No public design system or brand-guidelines page was opened. The shipped CSS is a Webflow build whose root defines named color variables (`--_colors---*` for greys, dark and nav color), a rem-based type scale (`--text--*`), container widths and section paddings, and an indirect font-family variable (`--_text-style---font-family`). The brand system is compact: one family, one weight, silver on near-black, and one button shape.

## Voice and Content Patterns
Copy is short, declarative and confident, with no price, rate or feature table on the first screens: "BUILT FOR MODERN WEALTH", "INFRASTRUCTURE FOR HOW YOU MOVE", "A QUIETER WAY TO MOVE THROUGH THE WORLD". The invitation framing ("Apply for Access") replaces ordinary sign-up language, and the headings alternate with one-sentence explanations in the greyer #c0c4c6. Product proof is shown through small interface chips layered on the globe image, each a plain status message with a check icon (a completed transaction, a booked jet, a booked hotel), so features are demonstrated as outcomes. Card titles under the travel section use the 18px size, for example "Hotels", and the supporting line says membership includes preferred rates and exclusive experiences. Light white and grey sections lower on the page (the largest measured areas) invert the scheme to #080808 text, so the brand can move between a dark cinematic opening and a lighter information layer without changing typeface, weight or button shape.

## Do's and Don'ts
- Do use #080808 for dark sections and #e1e5e5 for headings, nav and the primary pill.
- Do set headings uppercase in weight 500 with slight negative tracking.
- Do keep every call to action as "Apply for Access" in the full-radius pill.
- Do let rendered 3D imagery and a single centered column carry each section.
- Don't add accent colors; the palette is greys only.
- Don't add drop shadows or heavy borders.
- Don't treat the "Site of the Day" award badge as brand UI.

## Responsive Behavior
The mobile pass measured the h1 at 37.3464px (line-height 37.3464px, -0.298771px tracking) in a 311px column, against 64px on desktop. Menu behavior, other layout changes and breakpoints were not measured.

## Iteration Guide
1. Start from #080808 with #e1e5e5 headings in Neue Montreal 500 uppercase.
2. Put one centered heading, one short sentence and one silver pill per section.
3. Use #c0c4c6 for supporting copy on dark and #666f76 on light sections.
4. Keep radii to the full pill and 4px badges.
5. Re-run `node web/scripts/verify-designs.mjs --slug=moto-finance` after edits.
