---
version: alpha
name: Hopper
category: "Travel & Hospitality"
description: Hopper's consumer travel-booking site is a white (#ffffff) canvas set in Proxima Nova, a full-bleed destination photograph with a pill search bar, a single saturated blue (#1878ec) for action and links, near-black (#111111) headlines, grey (#606060) body copy, and shapes stepping from 4px through 12px and 32px to full pills.

colors:
  canvas: "#ffffff"
  page-largest: "#1878ec"
  ink: "#606060"
  ink-strong: "#111111"
  primary: "#1878ec"
  primary-hover: "#135fc3"
  primary-active: "#0e4799"
  primary-tint: "#e7f8ff"
  surface-muted: "#f6f6f6"
  divider: "#d9d9d9"
  hover-overlay: "#00000008"
  coral: "#fa6866"
  success: "#37a14a"
  error: "#d72021"
  warning: "#c45000"
  offer: "#f6ca05"
typography:
  headline:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  display:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 32px
    fontWeight: 800
    lineHeight: 40px
  body:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: "\"Proxima Nova\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 23px
    letterSpacing: "-0.16px"
rounded:
  xs: 4px
  sm: 12px
  md: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 11px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-nav-pill:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 12px
    height: 42px
    borderColor: "{colors.canvas}"
  button-nav-pill-hover:
    backgroundColor: "{colors.hover-overlay}"
  button-sign-in:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 44px
    borderColor: "{colors.canvas}"
  text-input:
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    padding: 25px 4px 7px 24px
    height: 55px
  footer:
    textColor: "{colors.ink-strong}"
    padding: 48px 32px 68px
---

# Hopper

## Overview

Hopper is a travel-booking product (stays, flights, cars, deals) whose web home page is a single, tall scroll of
2,290px at the measured 1,280px desktop width. The capture opens on a full-bleed photograph of Mount Fuji above a
town, inset from the viewport edge with large rounded corners, and captioned in the bottom right ("El Nido,
Philippines") with a small three-dot carousel indicator. Over that image sit a translucent navigation row and, in
the middle, a white pill-shaped search bar with three fields (Where, Dates, Guests) ending in a round blue search
button. A small pink bunny, the brand mascot, peeks over the top edge of the search bar.

Below the hero the page becomes plain. A white section carries a two-column app promotion: left, the headline "Get
deal alerts on the app", a one-line description, a QR code with a blue arrow and the label "Scan to download", and
two award-laurel badges reading "4.8 Rating" and "4.6 Rating"; right, two phone mockups showing a colour-coded
fare calendar (green, orange and red cells) and a map. A pale-grey band (#f6f6f6) follows with "Keep exploring"
and a four-column grid of blue destination links. The footer returns to white with a coral logo, social icons,
five link columns, a hairline rule and legal text with underlined links.

The personality is friendly and utilitarian rather than editorial: one typeface, one blue, little decoration,
and the photograph and the mascot carry all the emotion. Colour appears as data on the product screenshots
(green for cheap, red for expensive), not as page chrome.

Key characteristics:
- White canvas (#ffffff) with a pale-grey (#f6f6f6) band for secondary browsing content.
- One typeface, Proxima Nova, in four loaded weights (400, 600, 700, 800).
- One action colour, blue #1878ec, which is also the colour of every text link on the page.
- Near-black #111111 for headlines and form text; mid-grey #606060 is the most-read text colour by character count.
- Radii from a small scale: 4px, 12px, 32px and full pills; no sharp-cornered containers on the hero.
- Photography-led hero; product UI shown inside phone frames instead of as live components.

## Colors

### Core palette
The first four values were measured from the live page. The rest were read from the site's own CSS custom
properties (`--color-*` and the `--blue-*`, `--gray-*` scales) found in the page's root variables.

| Token | Value | Role |
|---|---|---|
| canvas | #ffffff | Page background, search bar, footer |
| surface-muted | #f6f6f6 | "Keep exploring" band |
| ink-strong | #111111 | Headlines, form text, footer text |
| ink | #606060 | Most-read text by character count: footer links, field placeholders |
| primary | #1878ec | Links, search button, "Scan to download" |
| primary-hover | #135fc3 | Darker blue step (`--blue-60`, also `--color-link`) |
| primary-active | #0e4799 | Pressed blue step (`--blue-70`, `--color-surface-primary-active`) |
| primary-tint | #e7f8ff | Lightest blue tint (`--blue-05`) |
| divider | #d9d9d9 | `--color-divider` hairline |
| hover-overlay | #00000008 | 3% black fill measured on hover of nav buttons |
| coral | #fa6866 | `--color-coral-40`; the shade family the footer logo sits in |

`page-largest` (#1878ec) is the background colour with the largest summed area in the DOM walk. In the capture
blue is visible only on the small round search button, so treat this as a measurement artefact of
nested elements rather than evidence of large blue surfaces; the screen is dominated by white (#ffffff) and
the hero photograph.

### Status and promotional colours
The CSS exposes functional colours that do not appear in the capture but are part of the shipped system:
- success #37a14a (`--color-success`, `--color-green-50`)
- error #d72021 (`--color-error`, `--color-red-50`)
- warning #c45000 (`--color-warning`, `--color-orange-50`)
- offer #f6ca05 (`--color-offer`, `--color-yellow-20`)

The phone mockups in the capture use green, orange and red calendar cells to encode price level; they are
screenshots, not page components, so those exact shades are not tokens here.

### Usage rules observed
- Blue is for things you click: the search button and text links. Body copy is never blue.
- White text sits only on the hero photograph (navigation, Sign In); everywhere else text is #111111 or #606060.
- The grey band is a flat fill with no border or shadow.
- Coral belongs to the logo and mascot, not to buttons.

## Typography

### Family
Proxima Nova is the only family loaded (`"Proxima Nova", sans-serif`), in weights 400, 600, 700 and 800. It is a
commercial typeface by Mark Simonson, released in 2005 as the successor to Proxima Sans (1994), described by its
designer as blending the geometric style of Futura with the versatility of Akzidenz Grotesk
(https://www.marksimonson.com/fonts/view/proxima-nova).

### Scale
| Token | Size | Weight | Line height | Use |
|---|---|---|---|---|
| display | 32px | 800 | 40px | Section headline "Get deal alerts on the app" |
| headline | 20px | 700 | 28px | "Keep exploring" |
| body | 16px | 400 | 24px | Description paragraph, footer text |
| button | 16px | 400 | 20px | Navigation pills |
| input | 16px | 600 | 23px | Search fields, letter-spacing -0.16px |

Other measured sizes: 14px carries the largest share of characters on the page (destination links and footer
links), and 18px appears on a small amount of text. Their weights and line heights were not recorded as roles, so
they are not tokens here. The site's CSS also defines a size ladder (`--text-1` to `--text-15`, 10px up to 62px)
with paired line heights.

### Principles
- Headlines are heavy (700 to 800) and tight; body is regular. The weight jump does the hierarchy, not colour.
- No uppercase, no tracking tricks. The only letter-spacing measured is the input's -0.16px.
- Field labels ("Where", "Dates", "Guests") are small and grey above the larger dark value, a floating-label pattern
  suggested by the input's asymmetric padding (25px top, 7px bottom).

### Font substitutes
Proxima Nova is proprietary. Where it cannot be licensed, use a geometric-humanist sans such as Montserrat or
Nunito Sans for display and a neutral grotesque for body, and expect slightly different widths. These are
design-judgement suggestions, not Hopper's own fallbacks; the site's own fallback is the generic `sans-serif`.

## Layout

- Measured page width 1,280px; the site's CSS declares a content container of 1,100px (`--container-container`), and
  the headline box in the capture is 1,100px wide.
- The hero is a rounded full-bleed image block that nearly fills the first viewport and holds the whole header.
- Sections below stack vertically with generous white space: the app promotion is a two-column split, text left and
  phones right.
- "Keep exploring" is a four-column link grid on the grey band, rows spaced about one line apart.
- Footer: five columns (Travel, Products, Company, FAQs, Media), social icons right-aligned on the logo row,
  hairline divider, legal text beneath. Measured footer padding is 48px 32px 68px.
- Spacing scale measured from the page: 4, 6, 8, 10, 11, 12, 16, 20, 24 and 25px; the site's CSS also defines a
  `--spacing-container-padding` variable.

## Elevation & Depth

Hopper is almost flat. The single measured shadow is soft and large, offset downward and pulled inward:
`rgba(0, 0, 0, 0.25) 0px 4px 26px -7px`, applied once on the page (weight 1), consistent with the floating search
bar over the photograph. A faint shadow variable (`--color-shadow-light`, #0000000d) also exists in the CSS.

Depth otherwise comes from:
- the photograph behind white pills (translucent navigation with a white 1px border);
- the grey (#f6f6f6) band against white;
- the phone mockups, which carry their own thick black frames.

There are no card shadows, no borders on the grey band, and no layered elevations on the footer.

## Shapes

| Token | Value | Where it was measured |
|---|---|---|
| xs | 4px | Small elements (six measurements) |
| sm | 12px | Sign In and My Trips outlined buttons |
| md | 32px | Large containers (two measurements) |
| pill | 9999px | Navigation pills, search bar, search button |

A 50% radius also appears once (the round search button). The CSS defines a wider radius ladder (2px, 8px,
12px, 16px, 24px, 32px) of which only the values in the table were measured on the home page.

Shape language: the hero image and search bar are soft and large; utility buttons (Sign In) use the tidier 12px
corner; fields and small tiles use 4px. Nothing on the page is sharp-cornered except text blocks.

## Components

### Navigation pills (button-nav-pill)
White text, no fill, 1px white border on the active "Stays" pill and transparent border on the others
("Flights", "Cars", "Deals"). 42px tall, padding 8px 12px, full-pill radius, 16px / 400 text, each paired with a
small line icon. On hover the fill becomes 3% black (#00000008).

### Sign In and My Trips (button-sign-in)
Outlined, white text and white border over the photograph, 44px tall, 12px radius. Same 3% black hover fill.

### Search bar and fields (text-input)
A white pill holding three equal fields separated by thin vertical dividers. Each field shows a small grey
label above a value; measured input is 55px tall, 16px / 600 text, padding 25px 4px 7px 24px, text colour
#111111. The submit control is a round blue (#1878ec) button with a white magnifier. Placeholders read "Search
destination" and "Add dates"; guests default to "2 guests".

### App promotion block
Headline in display style, 16px description, QR code, blue left-pointing arrow beside "Scan to download", and
two laurel rating badges. The block has no card chrome; it sits directly on white.

### Destination link grid
Blue (#1878ec) text links, 14px, four columns, no underline, no icons. Heading "Popular destinations" in a
bolder weight sits above them.

### Footer
Logo (coral) left, social icons (Facebook, X, Instagram, LinkedIn, YouTube, TikTok) right. Column headers in a heavier
weight, links in grey (#606060). Beneath a hairline rule: "Cookie Privacy Preferences" and the reCAPTCHA notice with
underlined inline links.

## Design System Architecture

No public design-system documentation, brand guidelines or token package from Hopper was found; the press page at
hopper.com/press-kit returned only a page title when fetched. The de-facto system is therefore described from what
the site ships:

- **Tooling signals.** Root variables include Tailwind-style names (`--tw-shadow`, `--tw-ring-offset-color`,
  `--text-1` to `--text-15`, `--radius-sm` to `--radius-3xl`) and shadcn-style names (`--background`, `--foreground`,
  `--muted`, `--primary-foreground`, `--sidebar-primary-foreground`) alongside Hopper's own namespace. That
  indicates a utility-CSS build with a custom theme layer.
- **Colour scales.** Numbered ramps named `--blue-05` to `--blue-100`, `--gray-05` to `--gray-100`, `--red-*`,
  `--green-*`, `--orange-*`, `--yellow-*` and `--coral-*`, plus semantic aliases such as `--color-primary-main`
  (#1878ec), `--color-accent-main` (#111111), `--color-link` (#135fc3), `--color-error`, `--color-success`.
- **Surface states.** Names like `--color-surface-primary-resting`, `-hover`, `-active` and `-tint-*` imply a
  resting/hover/active triple for each surface family (primary, accent, raised, contrast).
- **Type scale.** `--display-xl-font-size`, `--headline-lg-font-size` and similar names map semantic roles onto the
  `--text-*` ladder.
- **Layout.** `--container-container` is 1,100px.

Sources checked: Mark Simonson's Proxima Nova page (typeface facts); hopper.com's own CSS (via the extractor). No
official design-token repository was found. A search for "hopper design tokens" returns Workleap's unrelated "Hopper"
design system, which is not this company's. A page listing the logo colour as #fa6866 came from a third-party
logo directory and is not used as a source; the same value appears independently as `--color-coral-40` in Hopper's
own CSS.

## Do's and Don'ts

### Do
- Keep the canvas white (#ffffff) and use the grey (#f6f6f6) only for secondary browsing bands.
- Use #1878ec for links and the primary search action, and nothing decorative.
- Set headlines in Proxima Nova 700 to 800 and body at 400.
- Use full pills for navigation and the search bar, 12px for outlined utility buttons, 4px for small elements.
- Put white text only over the hero photograph.
- Let a real destination photograph carry the first screen.
- Show product value through screenshots in device frames.

### Don't
- Don't use coral (#fa6866) for buttons or links; it belongs to the logo and mascot.
- Don't add card shadows; the page's only measured shadow is the soft one under the search bar.
- Don't set body text in blue.
- Don't introduce a second typeface or uppercase labels.
- Don't use sharp-cornered containers on the hero.
- Don't use status colours (success, error, warning, offer) as brand accents.

## Responsive Behavior

Only a desktop capture at 1,280px and a mobile text-size sample were available. The mobile sample measured the same
sizes as desktop for body text (14px and 16px dominate) plus 18px and 24px, so type does not appear to rescale
dramatically. Layout behaviour on small screens was not captured; the following are expectations from the
structure rather than observations:

- the mobile behaviour of the three-field search bar and the two-column app promotion was not measured;
- the four-column destination grid and five-column footer would reduce column count.

Touch targets measured on desktop are already generous: 42px navigation pills, 44px outlined buttons and a 55px
search field.

## Iteration Guide

1. Start with the tokens: canvas #ffffff, ink-strong #111111, ink #606060, primary #1878ec, surface-muted #f6f6f6.
2. Set everything in Proxima Nova (or a named substitute) at 16px / 24px; headlines at 20px/700 and 32px/800.
3. Build the hero: rounded photograph, white pill search bar, round blue button.
4. Add the navigation as transparent pills with 1px white borders; give the active one the border.
5. Add the app promotion on white and the "Keep exploring" block on #f6f6f6 with blue links.
6. Finish with the five-column footer, a #d9d9d9 hairline and underlined legal links.
7. Check: only one blue, no shadows except the search bar, radii limited to 4, 12, 32 and pill.

When extending: derive hover and pressed blues from #135fc3 and #0e4799, tint backgrounds from #e7f8ff, and
reach for the status colours only for status.

## Appendix: measured facts

- Page title: "Hopper | Book Hotels, Flights, Car Rentals & More".
- Visible elements counted: 331 (desktop).
- Loaded font faces: Proxima Nova 400, 600, 700, 800.
- Dominant font family by characters: Proxima Nova (1,010 characters).
- Text colours by characters: #606060 (391), #111111 (313), #1878ec (254), #ffffff (52).
- Backgrounds by area: #1878ec, #f6f6f6, #ffffff, #ffffff33.
- Font sizes by characters: 14px (663), 16px (291), 32px (26), 18px (16), 20px (14).
- Border radii measured: 1000px (10), 4px (6), 32px (2), 12px (2), 50% (1).
- Hover state of nav controls: background from transparent to 3% black, border unchanged.
- No primary filled CTA was detected; the page's main action is the round search button, so `button-primary` is
  intentionally absent.
- Interaction states other than hover were not captured.
