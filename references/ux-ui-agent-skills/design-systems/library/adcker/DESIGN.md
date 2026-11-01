---
version: alpha
name: Adcker
category: "Fashion & Apparel"
description: "Social media agency for beauty, fashion and wellness brands, measured at adcker.com: warm grey #efedea page with #191919 type, centred uppercase Kumbh Sans display lines at 165.6px with -8.28px tracking, small psl serif labels, an inline portrait inside the headline and square corners."
colors:
  canvas: "#efedea"
  ink: "#191919"
  primary: "#efedea"
  surface-alt: "#e3e1de"
typography:
  display:
    fontFamily: "\"Kumbh Sans\", sans-serif"
    fontSize: 165.6px
    fontWeight: 400
    lineHeight: 132.48px
    letterSpacing: "-8.28px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Kumbh Sans\", sans-serif"
    fontSize: 46.8px
    fontWeight: 400
    lineHeight: 36.504px
    letterSpacing: "-2.34px"
    textTransform: uppercase
  body:
    fontFamily: nhm, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  heading:
    fontFamily: "\"Kumbh Sans\", sans-serif"
    fontSize: 153.6px
    fontWeight: 400
    lineHeight: 119.808px
    letterSpacing: "-7.68px"
    textTransform: uppercase
  subheading:
    fontFamily: psl, serif
    fontSize: 32.8px
    fontWeight: 400
    lineHeight: 39.36px
    letterSpacing: "-0.492px"
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 15px
  s4: 19.2px
  s5: 24px
  s6: 25px
  s7: 25.6px
  s8: 28.16px
  s9: 29.36px
  s10: 30px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
---

## Overview
Adcker (title "Index - Adcker") is a social media agency that specialises in the beauty, fashion and wellness industries. Its menu labels are Index, Services ("What we do"), Our Work ("Projects"), About ("Who we are") and Contact ("Get in touch"); a "Showreel" label sits in the hero. The footer carries an email address, an Instagram handle, a 2025 copyright and a credit link "By Emele Collab".

The capture is almost pure typography on a warm light-grey page. The logotype "adcker" sits at the top left in lowercase and a "Menu" label at the top right. In the centre, a stacked headline in huge uppercase letters reads "THE ART *( ) OF HACKING SOCIAL", where the gap inside the parentheses holds a small square photograph of a woman in orange-tinted sunglasses, and small serif labels flank the lines ("Showreel" beside the photo, "We're built for" beside "HACKING"). The next section is a giant "FOR BEAUTY" heading with a "Click me" arrow, then "Our services" and the sentence "Beauty on social media is a goldmine." in a serif. The page is a scroll experience in an inner scroller 5176px tall inside a 2400px document.

## Colors
Two colours carry everything. `{colors.canvas}` (#efedea, a warm grey-beige, 5123 area units) is the page, and `{colors.ink}` (#191919, 2027 units, 1060 text weight) is the type and the dark sections. `{colors.surface-alt}` (#e3e1de, 236 units) is a slightly darker panel tone. Text on the dark sections is `{colors.canvas}` (400 weight), which is also what the extractor named `{colors.primary}`: the page has no filled button or accent colour, so the primary role is the light neutral used for light-on-dark text.

The only chromatic element in the capture is the photograph. The Swiper carousel library's default `--swiper-theme-color: #007aff` and the Tailwind ring colour `rgba(59,130,246,.5)` appear in the stylesheet; they are library defaults, not brand colours, and are not declared.

## Typography
Four custom families are loaded: Kumbh Sans (a 700 face is loaded, though the measured computed weight of the display text is 400), "psl" (a light serif, 300), "psr" (a regular serif, 400) and "nhm" (400, a neo-grotesque used for UI text). Names beyond these are not documented by the site.

- `{typography.display}`: Kumbh Sans at 165.6px / 132.48px (line-height 0.8), -8.28px tracking, uppercase ("THE ART").
- `{typography.heading}`: Kumbh Sans at 153.6px / 119.808px, -7.68px tracking, uppercase ("FOR BEAUTY", "OUR SERVICES").
- `{typography.display-mobile}`: Kumbh Sans at 46.8px / 36.504px, -2.34px tracking, uppercase (mobile h2).
- `{typography.subheading}`: psl at 32.8px / 39.36px, -0.492px tracking, for sentences such as "Beauty on social media is a goldmine."
- `{typography.body}`: nhm at 16px / 19.2px, for the menu label and small UI.

Letter-spacing is a consistent -0.05em on the display sizes, so the letters nearly touch. Font substitutes: all four faces are custom; use a geometric sans in bold for display, a high-contrast light serif for editorial lines and a neutral grotesque for labels.

## Layout
The desktop frame is 1280px wide. Headline lines are centred, stacked at line-height 0.8, with small inline elements (photo thumbnail, serif labels, a "( )" and "*" glyphs) set between the words as if they were part of the sentence. Measured spacing steps are 4, 8, 15, 19.2, 24, 25, 25.6, 28.16, 29.36 and 30px; display lines have 15px vertical padding and 8px horizontal padding. The layout has no grid or cards in the capture: it is typographic and centred with large empty margins.

## Elevation & Depth
There are no visible shadows. The stylesheet lists `1px 2px 9px 0 rgba(0, 0, 0, 0.65)` twice and Tailwind variable chains, but no role carries a shadow. Depth comes from scale contrast between tiny labels and gigantic headlines.

## Shapes
No element radius was measured (the radius frequency table is empty), and body and headings report 0px, so `{rounded.none}` (0px) is the only radius token. The stylesheet lists one 4px radius, but where it is used was not measured.

## Components
**Menu label**: "Menu" at the top right in nhm 16px, `{colors.ink}` on the light page; a "Close" label replaces it when open. In the mobile pass the extractor measured the Menu span at 16px with an `{colors.canvas}` background clip.

**Inline photo**: a small square portrait placed inside the headline's parentheses, a flat rectangle with no radius.

**Serif label**: small psl labels such as "Showreel" and "We're built for", set beside headline words.

**Click-me link**: a left arrow with the label "Click me" next to the "FOR BEAUTY" heading.

**Carousel**: Swiper navigation with a 44px navigation size variable (`--swiper-navigation-size: 44px`).

## Design System Architecture
No brand guideline or design system is linked from the homepage opened for this document (https://adcker.com/); the footer credit points to emelecollab.com, which was not opened. The site runs on WordPress (a `--wp-internal-comment` variable is present) with a Tailwind layer (`--tw-*` variables) and Swiper. Colour is limited to the two neutrals, and type to four custom families, so the de-facto system is a handful of sizes (165.6px, 153.6px, 32.8px, 23.9px, 16px by character counts) and two colours.

Voice and content: the agency speaks in declarative, confident statements ("The art of hacking social", "We're built for hacking social", "Beauty on social media is a goldmine. Trends explode, produc..."). Headline words are broken across lines and interleaved with punctuation glyphs (an asterisk, parentheses) so that the headline reads like a formatted code or editorial notation. A "Showreel" label is a text link that sits next to the thumbnail rather than a button. The pages for each industry are reached by a "Read more" link to the services page, and the contact label is phrased as "Get in touch".

Typographic hierarchy has three levels only: gigantic uppercase sans for the claim, a mid-size light serif for explanatory sentences at 32.8px, and a 16px grotesque for the interface. Because the page has no cards, borders or rules, the hierarchy comes entirely from size, case and typeface contrast. When adding new sections, keep to these three levels. The large tracking pull (-8.28px at 165.6px and -7.68px at 153.6px) is applied only to the display sizes; the serif subheading uses a small -0.492px.

## Do's and Don'ts
- Do set display lines in uppercase with -0.05em tracking and 0.8 line-height.
- Do place small serif labels and photographs inside the headline as if they were words.
- Do keep the palette to `{colors.canvas}` and `{colors.ink}`.
- Do centre stacked headlines on a quiet page.
- Don't add colour accents, rounded buttons or shadows.
- Don't use the Swiper blue or Tailwind ring blue as brand colours.
- Don't fill the page with body copy; use one serif sentence per section.

## Responsive Behavior
Measured at 390px: the h2 "FOR BEAUTY" drops from 153.6px to 46.8px with 36.504px line-height and -2.34px tracking (box 390px wide, 301px tall), and the Menu label stays 16px / 19.2px. Character counts show the most-used sizes on mobile as 23.9px, 16px and 47.8px. No body text role was detected on mobile. Layout reflow of the services section was not measured.

## Iteration Guide
1. Page `{colors.canvas}`, text `{colors.ink}`, no accent colour.
2. Display type: uppercase Kumbh Sans, -0.05em tracking, 0.8 line-height, centred.
3. Insert a small photo and serif labels into the headline.
4. Serif subheads at 32.8px for sentences; nhm 16px for UI.
5. Square corners everywhere.
6. Hover, dark sections other than the ink fill, and the menu overlay are not measured.
