---
version: alpha
name: LaunchDarkly
category: "Developer Tools & IDEs"
description: "LaunchDarkly's runtime-control site: #191919 near-black bands against #f8f8f8 light panels, an acid-lime #ddff46 'Book a demo' button with 12px corners, orange #ff9d29 and blue #405bff product accents, bold headingFont3 64px/700 headlines tracked -3.2px, bodyFont 22px/500 copy and large 24px-radius cards."
colors:
  canvas: "#f8f8f8"
  page-body: "#191919"
  ink: "#191919"
  primary: "#ddff46"
  on-primary: "#191919"
  accent-orange: "#ff9d29"
  accent-blue: "#405bff"
  surface-raised: "#212121"
  ink-on-dark: "#d1d6d9"
  ink-grey: "#414042"
  ink-black: "#0c0c0c"
  white: "#ffffff"
  hairline: "#2c2c2c"
  link: "#7084ff"
typography:
  display:
    fontFamily: headingFont3, "headingFont3 Fallback", sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 64px
    letterSpacing: "-3.2px"
  display-mobile:
    fontFamily: headingFont3, "headingFont3 Fallback", sans-serif
    fontSize: 34px
    fontWeight: 700
    lineHeight: 37.4px
    letterSpacing: "-2px"
  subheading:
    fontFamily: bodyFont, "bodyFont Fallback", sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
    letterSpacing: "-0.65px"
  body:
    fontFamily: bodyFont, "bodyFont Fallback", sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 30.8px
  button:
    fontFamily: bodyFont, "bodyFont Fallback", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "-0.16px"
  nav:
    fontFamily: bodyFont, "bodyFont Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: bodyFont, "bodyFont Fallback", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  button-large:
    fontFamily: bodyFont, "bodyFont Fallback", sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: "-0.18px"
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 32px
  3xl: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 24px
    height: 45px
  button-primary-hover:
    textColor: "{colors.white}"
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.md}"
    padding: 10px 12px 10px 16px
    height: 50px
    borderColor: "{colors.page-body}"
  button-codecontrol:
    backgroundColor: "{colors.accent-orange}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.md}"
    padding: 10px 12px 10px 16px
    height: 50px
  button-agentcontrol:
    backgroundColor: "{colors.accent-blue}"
    textColor: "{colors.white}"
    typography: "{typography.button-large}"
    rounded: "{rounded.md}"
    padding: 10px 12px 10px 16px
    height: 50px
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.white}"
    rounded: "{rounded.none}"
    padding: 0px 12px
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    padding: 32px
  footer:
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
---

# LaunchDarkly

## Overview

LaunchDarkly sells feature flags and "runtime control" for code and AI agents, and launchdarkly.com is a high-contrast, playful-industrial page: near-black #191919 bands, large rounded #f8f8f8 panels, an acid-lime #ddff46 action color and bursts of orange, blue, pink and yellow in product illustrations. A thin black announcement bar ("[Virtual event] Automate Your Software F… — Save my seat" in periwinkle #7084ff) tops the page; the header carries Platform, Solutions, Resources, Developers, Pricing, Sign in and a lime "Book a demo" button whose corners are rounded only at the bottom (0px 0px 8px 8px), so it hangs from the top edge like a tab. A logo marquee (Hireology, hulu, RELAY, Poca…) follows.

The main light panel, "Control every change in production.", sets the headline at 64px, weight 700, -3.2px tracking, with numbered step chips (01–05) and five feature rows — "Ship AI-built code with confidence", "Control and govern AI agents in production", "Optimize AI performance and cost", "Enable self-healing systems", "Experiment continuously" — each with a colored icon square, a short paragraph, a "Learn more →" button and a saturated gradient card containing a product UI fragment. A black band then announces "Ship with AI that does what you expect— however you build." at 80px over a pink wave with a cartoon character. Two split sections present CodeControl (orange "code" highlight, orange button) and AgentControl (blue "agents" highlight, blue button) with outlined capability chips. A "See how LaunchDarkly works" dashboard, a "Built for developers and their agents" pair of cards, a Savage X Fenty customer story with a 15% stat, and four resource cards with illustrated headers close the page above a lime gradient footer ("Ready to take control in prod?").

The voice is crisp and imperative ("Control every change in production.", "Go agent-native.", "Copy, paste, go."), with periods ending most headlines.

## Colors

- **Primary #ddff46** — acid lime, the "Book a demo" and "View agent integrations" fill; the footer uses a related 160-degree lime gradient.
- **On-primary / ink #191919** — the label color on lime and the most-read text color on light panels; also **page-body #191919**, the body background and the largest painted area.
- **Canvas #f8f8f8** — the light panels and "Learn more" buttons.
- **Accent-orange #ff9d29** — the CodeControl product color (its button and the word "code" in the headline).
- **Accent-blue #405bff** — the AgentControl product color (its button and the word "agents").
- **Surface-raised #212121** — cards inside the dark bands; **hairline #2c2c2c** — the most common border, on dark cards.
- **Ink-on-dark #d1d6d9** — paragraph text on dark bands; **ink-grey #414042** and **ink-black #0c0c0c** — secondary and body text on light panels.
- **White #ffffff** — header links and the measured hover label of the lime button.
- **Link #7084ff** — periwinkle links ("Save my seat") and nav link targets.

Pink #e75fa4 and blue #0073e6 appear in small text and illustrations.

## Typography

The site self-hosts its faces under aliased names, so the real family names are not exposed in CSS: **headingFont3** (600, 700) for display headlines and **bodyFont** (400, 500) for everything else, plus **monoFont** for code.

- **Display** — headingFont3 64px / 64px, weight 700, -3.2px tracking (measured on "Control every change in production."). Larger statements reach 80px (-2px tracking) and 112px; section heads also run at 56px / 600 (-2.8px) and 40px.
- **Subheading** — bodyFont 32px / 35.2px, weight 600, -0.65px ("Ship AI-built code with confidence.").
- **Body** — bodyFont 22px / 30.8px, weight 500 for testimonial and lead copy; most running copy is 16px with -0.48px tracking and 20px with -0.6px tracking.
- **Button** — bodyFont 16px / 16px, weight 500, -0.16px; **button-large** 18px / 18px, weight 500, -0.18px.
- **Nav** — 16px / 16px weight 400; **link** 14px / 21px weight 500.

Negative tracking is applied at every size, from -0.16px on buttons to -3.2px on display. For prototypes, a bold geometric grotesk with tight tracking matches the display; the body face is a neutral grotesk at medium weight.

## Layout

At 1280px the main light panel spans from 76px to 1200px; the dark statement band centres its content between 208px and 1072px. Feature rows are a two-column split (text left, gradient UI card right); the CodeControl and AgentControl sections are mirror-image splits of a large dark card and a field of capability chips. Grids go up to four columns (resources) and logo rows run wider. Seven header items are visible on desktop.

Spacing: 24px is the most common gap and padding; 16px, 10px and 8px follow inside components; 56px and 88px paddings structure sections. The spacing tokens step 1, 3, 4, 5, 6, 7, 8, 10, 12 and 16px.

## Elevation & Depth

LaunchDarkly uses almost no shadow — one 15% black 0px 4px 16px shadow was measured. Depth comes from the stacking of large rounded panels: #f8f8f8 panels and #191919 cards sit on the #191919 page with 24px corners, and saturated gradient cards (lime, pink, orange, yellow) layer over them. Dark cards use #2c2c2c borders instead of shadows.

## Shapes

Shapes are big and deliberately irregular. Measured radii include 16px (most frequent), asymmetric 8px 54px corners on tags, 24px on cards, 12px on large buttons, 8px, 999px pills, 32px and 100px rounding, and mixed corners such as 16px 8px 8px 16px, 16px 16px 16px 64px, 16px 44px 16px 16px and 24px 0px 0px. The header "Book a demo" is square on top and 8px-rounded on the bottom; the "Read story" button is 12px 0px 24px. The illustration style uses blobby waves, sparkles and a cartoon mascot.

## Components

- **Header CTA** — #ddff46 fill, #191919 bodyFont 16px weight 500, 8px 24px padding, 45px tall, corners 0px 0px 8px 8px; on hover the label turns white (measured).
- **Large button** — #ddff46 fill, 1px #191919 border, 18px weight 500, 10px 12px 10px 16px padding, 50px tall, 12px radius, with a trailing arrow.
- **Product buttons** — the same shape in #ff9d29 ("Learn about CodeControl", "Browse tutorials") and #405bff with white text ("Learn about AgentControl").
- **Learn more** — #f8f8f8 fill with #191919 text and a 1px border; label turns white on hover (measured).
- **Feature row** — colored icon square, 32px / 600 title, short body copy, "Learn more →" button, gradient UI card.
- **Dark product card** — #191919, 24px radius, 32px padding, 64px / 700 headline in #f8f8f8 with the product word highlighted in its accent color.
- **Capability chip** — outlined rounded chip ("Feature Flags", "Targeting & Segments", "Online evals").
- **Resource card** — illustrated header, title at 24px / 500, short description.

## Design System Architecture

LaunchDarkly publishes no public marketing design system or written brand guidelines on its site: /brand/ and /brand-guidelines/ return 404, and the press page (https://launchdarkly.com/press-and-analysts/) offers only a downloadable brand-assets ZIP. The site is a Next.js build with CSS-module class names (`styles-module__…`) and aliased self-hosted fonts (`headingFont3`, `bodyFont`, `monoFont`); its root variables expose only empty `--font-body` and `--font-heading` hooks, so the de-facto system lives in component modules rather than global tokens. Breakpoints are written per module (min-width 1025px and 769px dominate).

## Do's and Don'ts

**Do**
- Pair #191919 and #f8f8f8 for high contrast, and reserve #ddff46 for the main action.
- Give each product its own accent: orange #ff9d29 for code, blue #405bff for agents.
- Set headlines bold with heavy negative tracking and end them with a period.
- Use big rounded panels (24px) and asymmetric corners for tags and tabs.
- Illustrate with saturated gradient cards that hold real UI fragments.

**Don't**
- Don't add drop shadows; depth comes from panel stacking.
- Don't put lime text on white; lime is a fill with #191919 labels.
- Don't use the product accents interchangeably.
- Don't treat the overlays the extractor hid as part of the system.

## Responsive Behavior

The extractor's mobile pass at 390px measured: the page's real h1 ("Move at AI speed. Stay in control.") at 34px / 37.4px, weight 700, -2px tracking in #f8f8f8; the "Control every change in production." heading at 30px / 33px with -1.5px; body text at 16px / 24.8px with -0.48px in #d1d6d9; the "Book a demo" button at 18px, 12px radius, 10px 12px 10px 16px padding, 48px tall. Four header items stay visible; content spans 24px to 366px. The stylesheet's most-used queries are min-width 1025px, min-width 769px, max-width 768px and max-width 1024px, with further module queries at 400px, 500px, 660px, 900px, 1100px, 1180px, 1260px and 1340px. The desktop hero itself was not measured (see SOURCES.json), and other mobile behaviour was not measured.

## Iteration Guide

1. Build on #191919 with large #f8f8f8 panels at 24px radius.
2. Set headlines in a bold grotesk at 64px / 700 with -3.2px tracking; subheads at 32px / 600.
3. Make the primary action #ddff46 with #191919 text: 45px header tab or 50px 12px-radius button.
4. Assign orange #ff9d29 and blue #405bff to the two product lines.
5. Fill feature visuals with saturated gradient cards and UI snippets.
6. Keep body copy at 16–22px weight 500 with slight negative tracking.
7. Check the 34px mobile hero and 48px mobile button.
