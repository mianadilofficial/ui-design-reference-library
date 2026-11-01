---
version: alpha
name: "Mitsubishi UFJ Financial Group (MUFG)"
category: "Banking & Insurance"
description: "Japanese financial-group corporate site in MUFG red #e60000 on white #ffffff with #333333 body ink, set in Hiragino Kaku Gothic Pro / Meiryo at 28px bold h1 and 12px body, near-square corners (2px, 4px) and outlined red buttons."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#e60000"
  surface-2: "#e6e6e6"
  surface-3: "#f7f7f7"
  ink-3: "#999999"
  ink-5: "#777777"
  ink-6: "#000000"
  hairline: "#dcdcdc"
typography:
  display:
    fontFamily: "\"ヒラギノ角ゴ Pro\", \"Hiragino Kaku Gothic Pro\", メイリオ, Meiryo, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 0px
  heading:
    fontFamily: "\"ヒラギノ角ゴ Pro\", \"Hiragino Kaku Gothic Pro\", メイリオ, Meiryo, sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 39px
  body:
    fontFamily: "\"ヒラギノ角ゴ Pro\", \"Hiragino Kaku Gothic Pro\", メイリオ, Meiryo, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  link:
    fontFamily: "\"ヒラギノ角ゴ Pro\", \"Hiragino Kaku Gothic Pro\", メイリオ, Meiryo, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
rounded:
  xs: 2px
  sm: 4px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 15px
  s10: 18px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 8px 15px
    height: 37px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    padding: 8px 15px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    padding: 0px 0px 25px
---

# Mitsubishi UFJ Financial Group (MUFG)

## Overview
The measured site is mufg.jp, the Japanese-language home page of 三菱UFJフィナンシャル・グループ (document language `ja`). It is a corporate and investor-relations portal rather than a retail banking storefront: the header carries the MUFG logo with the tagline 世界が進むチカラになる。, a one-line navigation of "MUFGについて", "ニュースリリース", "IR（投資家情報）", "サステナビリティ" and "採用情報", a 日本語 / English language switch and a search icon. The whole system is built from one saturated red, `{colors.primary}` (#e60000), laid over white and light grey, which makes the brand read instantly as MUFG and keeps every other color in a neutral supporting role.

The capture shows a full-width image carousel at the top (the slide visible is the 工芸プロジェクト project, with pagination dots and a pause control), followed by a grey band holding white cards. Three "PICK UP" cards each start with a solid red label strip carrying white text, then a photograph, then a red headline. Below them sit a report card and a news panel with a red left-rule heading, tabs, and dated press-release rows, then four photo tiles linking to the main corporate sections, a red-text notice box about fraudulent accounts, and a light-grey footer. Photography is documentary and corporate: people in an office, hands over printed charts, a hand holding a seedling, a stadium aerial. The tone is formal Japanese corporate Japanese, with dates written 2026年10月7日 and file sizes noted next to each PDF link.

## Colors
Measured by area, the page is `{colors.canvas}` white (#ffffff) first, then `{colors.surface-2}` (#e6e6e6) for the card band, `{colors.surface-3}` (#f7f7f7) for the footer, and `{colors.primary}` red for label strips and the header rule. By characters read, `{colors.ink}` (#333333) is the main text color, followed by red headlines and links, `{colors.ink-3}` (#999999) for dates and secondary text, white on red, `{colors.ink-5}` (#777777) and `{colors.ink-6}` (#000000). `{colors.hairline}` (#dcdcdc) is the most common border color, used for card and list-row outlines; a red 1px border (#e60000) is the second most common and belongs to outlined buttons.

The site CSS also contains other colors (for example #006097, #0073b1, social-brand blues and several pastel chart colors), but they were not measured on rendered surfaces on the home page and are not part of the token set. Red is the only chromatic color in use: it marks headings, links, buttons, tab underlines and label strips. Use it for emphasis and action, never as a large background except the label strips and the hover state.

## Typography
All measured text uses one stack: "ヒラギノ角ゴ Pro", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, sans-serif. No web font was loaded (the extraction recorded no loaded fonts and no @font-face rules), so the face is whatever the visitor's operating system supplies. A few CSS rules reference Graphik and -apple-system, which cover only a handful of characters. If you need a substitute where these Japanese system fonts are missing, choose a neutral Japanese gothic such as Noto Sans JP; that is a suggestion, not a measured value.

The scale: `{typography.display}` is the h1 at 28px weight 700 (the MUFG logo text block, in red); `{typography.heading}` is the h2 at 30px weight 700 with 39px line-height; `{typography.body}` is 12px weight 400 with 18px line-height (the footer copyright line); `{typography.link}` is 16px weight 400 with 19.2px line-height, used for the outlined button label. By characters read, 14px is the dominant size (571 weighted characters), then 16px, 30px, 20px, 12px, 22px and 28px. Weights are 400 and 700 (and a small 600). No letter-spacing is applied at any size and text-transform is none.

## Layout
The measured desktop page is 1280px wide and 3005px tall in the capture. Content sits in a centered container with white card panels on a grey band; the header is 170px tall including the red rule and the nav row. Cards are arranged in a three-up row (PICK UP), then a two-column row (report card plus news panel), then a four-up row of section tiles. Spacing values observed in padding and gaps include 3, 5, 6, 7, 8, 10, 12, 13, 15 and 18px (`{spacing.s1}` to `{spacing.s10}`); the most frequent padding is 15px, followed by 30px, 18px and 25px. The measured flex/grid gap is 12px. Density is moderate: generous white inside cards, tight 14px text in news lists.

## Elevation & Depth
No box-shadow was measured on rendered elements on the home page. Depth comes from color planes instead: white cards on the #e6e6e6 band, the #f7f7f7 footer, and 1px #dcdcdc borders. The CSS corpus does contain a few shadow declarations, but none were observed on visible elements, so treat the interface as flat.

## Shapes
Corners are almost entirely square. The measured computed radii are 2px (`{rounded.xs}`) and 4px (`{rounded.sm}`) on one element each, plus 50% on five elements (the carousel dots, shown in the capture as circles), recorded as `{rounded.pill}`. The outlined button, heading strips, cards and nav all compute to 0px radius. Borders are 1px.

## Components
**Outlined button / link ("くわしくはこちら", "ニュースリリース一覧").** `{components.button-secondary}`: white fill, red text (#e60000), 1px red border, 16px type, padding 8px 15px, height 37px, radius 0px. On hover the measured text color becomes white (#ffffff), so the button inverts. No filled primary button was detected on the page.

**Navigation.** `{components.nav}`: a white header with red text and a red bottom rule; nav links use the 28px bold display style for the logo word and small bold links for sections, separated by thin vertical dividers.

**PICK UP cards.** White card, 1px light border, a solid red strip at the top with centered white label text, an image, then a red bold headline. **News panel:** red left-rule heading, tabs with a red underline for the active tab and grey for the inactive one, dated rows separated by hairlines, and an outlined red button below. **Footer** (`{components.footer}`): #f7f7f7 background, #333333 text, 16px bold column headings (MUFGについて, IR（投資家情報）, サステナビリティ, ニュースリリース), 25px bottom padding.

## Design System Architecture
No public design system, brand-guideline page or token package was opened for this brief; the footer links to a "MUFGブランド" page, but it was not fetched, so nothing about it is claimed here. The de-facto system measured from the live page is: no CSS custom properties on :root (the extraction found none), one font stack, one accent color, a 1px border convention, and a flat card pattern. Treat the values in the frontmatter as the entire documented system.

## Do's and Don'ts
- Do use #e60000 for headings, links, outlined buttons and label strips, with #333333 for running text.
- Do build content as white cards on a #e6e6e6 band, separated by 1px #dcdcdc lines.
- Do keep corners square (0px) except for circular carousel dots.
- Do write Japanese copy in the formal register with explicit dates and file sizes.
- Don't introduce a second accent color; blues in the CSS were not measured on rendered surfaces.
- Don't add drop shadows or gradients; none were measured.
- Don't document the back-to-top control, cookie or chat widgets as brand UI.

## Responsive Behavior
The mobile pass recorded the h1 at 28px weight 700 in red, the body text at 9px in #333333, and character-weighted sizes led by 14px, then 20px, 18px, 15px and 16px. Breakpoints, menu collapse behavior and column counts at narrow widths were not measured; do not assume them.

## Iteration Guide
1. Start from white and #333333, then add #e60000 only for action and emphasis.
2. Reuse the outlined button recipe (white, red text, 1px red border, 8px 15px, 37px high) before inventing new buttons.
3. Keep headings bold (700) and body at 400 in the Hiragino/Meiryo stack.
4. Group content into white cards on #e6e6e6, with #f7f7f7 for the footer.
5. Re-run `node web/scripts/verify-designs.mjs --slug=mitsubishi-ufj` after any token rename.
