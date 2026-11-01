---
version: alpha
name: Serve Robotics
category: "Tech & AI"
description: "Serve Robotics home page: Roobert type with 107.461px display and -2.4px tracking, midnight green #083031 ink and primary, deep green #0f4233 bands, pale green #cee8e1 cards, mustard #ffc942 and mint #61e5c0 accents, 8px card radius."
colors:
  canvas: "#ffffff"
  ink: "#083031"
  primary: "#083031"
  surface: "#0f4233"
  surface-2: "#cee8e1"
  brand-mustard: "#ffc942"
  brand-mint: "#61e5c0"
  ink-3: "#ffffffb2"
  ink-4: "#0a4848ad"
  hairline: "#62ffff1a"
typography:
  display:
    fontFamily: Roobert, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 107.461px
    fontWeight: 500
    lineHeight: 107.461px
    letterSpacing: "-2.4px"
  display-mobile:
    fontFamily: Roobert, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 72.5878px
    fontWeight: 500
    lineHeight: 72.5878px
    letterSpacing: "-2.4px"
  heading:
    fontFamily: Roobert, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 55.6408px
    fontWeight: 400
    lineHeight: 55.6408px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: Roobert, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36.3429px
    fontWeight: 400
    lineHeight: 47.2457px
  body:
    fontFamily: Roobert, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.2px
    letterSpacing: "-0.14px"
  link:
    fontFamily: Roobert, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 15.4776px
    fontWeight: 500
    lineHeight: 20.1208px
    letterSpacing: "-0.16px"
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 8px
spacing:
  s1: 3px
  s2: 4px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 24px
  s10: 26.22px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
  nav:
    textColor: "{colors.ink}"
    padding: 24px 24px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 4px 8px
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 24px
  footer:
    textColor: "{colors.ink}"
    padding: 0px 16px 16px
---

# Serve Robotics

## Overview
Serve Robotics (serverobotics.com), maker of sidewalk delivery robots, presents a clean, friendly home page measured at 1280px wide and 17900px tall. The first screen is a rounded full-bleed video panel inset slightly from the viewport edges: a close-up of a white-and-green delivery robot ("Bowen" printed on its flank, round ring-shaped eyes, a screen reading "is on delivery"). A floating white nav pill sits on top, centered, with the S logomark and "Serve Robotics", Our Robot, Solutions, About, Careers, Our Brands, Investors (external-arrow) and a "Let's talk" link; a round pause control is at upper right. The 107.461px white headline "The future is here" sits bottom left with a bracketed "( Serve Robotics )" tag in mint. Below the hero, a white band centers the robot's mint ring-eyes graphic (colored #61e5c0), a message "A low-emissions solution to the last mile" in 55.6408px, and further bands in deep green (#0f4233), pale green (#cee8e1) and mustard (#ffc942). The tone is optimistic and eco-minded.

Art direction and microcopy: the brand's character is the robot itself. Its two ring-shaped eyes are repeated as a mint graphic at large scale in the first white band, as a bracket pair "( )" around labels, and in the logo's S mark, so a small set of curved geometric shapes is reused across the page. Photography and video show the robot in real street settings (a terracotta planter beside it, pedestrians blurred behind), with a calm, slightly cinematic grade rather than a product-studio look. Copy is plain and confident: "The future is here", "A low-emissions solution to the last mile", "Let's talk", "Feedback is welcome!". Sentences are in sentence case, never all caps. Density is low in the first screens, with one idea per viewport, and the very long scroll (17900px) spreads content into many separate bands.

## Colors
- Canvas: #ffffff. Primary and ink: #083031, named `--color-brand-midnight-green` in the site's CSS (most-read text, 792 characters).
- Deep green surface: #0f4233, the largest background area (2536), for dark sections; pale mint-green surface #cee8e1 (522) for cards.
- Brand mustard: #ffc942 (`--color-brand-mustard`, 108), for highlights.
- Mint: #61e5c0, the ring-eyes graphic and bracket marks, measured in the background areas.
- White text #ffffff on dark (308 characters), #ffffffb2 translucent white (129), #0a4848ad translucent green text (127), hairline #62ffff1a.
- Others: #000000bf overlay behind video text and #e1edf0 pale blue-grey.
Root variables also carry `--color-brand-white: #fff`.

## Typography
One family: Roobert (400 and 500), with a `ui-sans-serif, system-ui` fallback stack. Roobert is commercial; the fallback is the system sans.
- Display: 107.461px / 107.461px, weight 500, letter-spacing -2.4px (mobile pass: 72.5878px, -2.4px).
- Heading: 55.6408px / 55.6408px, weight 400, -1.2px.
- Subheading: 36.3429px / 47.2457px, weight 400.
- Body: 14px / 18.2px, weight 500, -0.14px (nav labels). Link: 15.4776px / 20.1208px, weight 500, -0.16px.
The most-used size is 17.4776px (642 characters, running text), then 55.6408px (224), 14px (127), 22.4327px (127), 15.4776px (98), 36.3429px (83) and 91.4612px (37). The root exposes a semantic type scale (`--text-title-100-strong`, `--text-subtitle-30-normal`, `--text-body-20-normal`, `--text-caption-30-strong`) with weights 400 or 500.

## Layout
The page is a sequence of full-width bands with a floating nav above them. Bands are generously padded; the nav container has 24px 24px 0 padding and is 68px tall. Sections alternate between white, deep green, pale green and mustard. Cards carry 24px padding. The footer is 560px tall, padded 0 16px 16px, and begins with "Feedback is welcome!". Spacing values: 3px, 4px, 7px, 8px, 10px, 12px, 14px, 16px, 24px and 26.22px. Root radii use a rem-based scale (`--radius-4`, `--radius-16`).

## Elevation & Depth
Depth works through layering of flat shapes: the inset rounded video panel sits on the white page, the white nav pill floats over the video, and a translucent dark overlay lifts white headline text off the image. For static components, avoid shadows and instead change the background (white, #cee8e1, #0f4233) to separate regions.
One shadow was recorded: `rgba(0,0,0,0.25) 0 25px 50px -12px` (the Tailwind 2xl shadow, used once). Everything else is flat; depth is provided by the inset video panel with rounded corners and by dark text-scrim overlays (#000000bf) on imagery.

## Shapes
The radius scale is small and tidy: 2px for nav links, 3px and 4px for small controls and links, 8px for cards. Larger curves in the page come from imagery and brand marks (the inset video panel and the ring-eyes) rather than from the component radii recorded in the extraction, so component work should stay within the 2px to 8px range.
Measured radii: 4px (26), 8px (22), 2px (8), 3px (2). Cards use 8px, the nav links 2px, small links 4px. The hero panel appears with larger rounded corners in the capture, tied to a rem-based radius variable that was not tied to a measured pixel value for that element. Brand shapes include the bracket "( )" tag and the ring eyes.

## Components
The measured component set is small: navigation, links, cards and footer.
- **Floating nav**: white pill container, 14px 500 labels in #083031, each link 4px 8px padded with a 2px radius, Let's talk as the last item.
- **Hero tag**: mint bracket marks around a white "Serve Robotics" label.
- **Card**: #cee8e1 fill, #083031 text, 8px radius, 24px padding.
- **Link**: 15.4776px 500, 4px radius.
- **Footer**: #083031 text, 0 16px 16px padding.
No primary button was detected, so none is declared.

## Design System Architecture
No public brand guidelines or design system were found on the site; the home page links to a /press page (opened as a link only; its content was not read). The shipped CSS is a Tailwind v4 theme: `--font-roobert`, `--font-sans`, `--font-mono`, a named color layer (`--color-brand-midnight-green`, `--color-brand-mustard`, `--color-brand-white`, `--color-current`, `--color-transparent`), a semantic text scale (`--text-title-*`, `--text-subtitle-*`, `--text-body-*`, `--text-caption-*`) and `--radius-*` values built from `calc(.0625rem*N)`.

## Do's and Don'ts
The guidance below is limited to values and patterns that appear in the measurement or the capture.
- Do use midnight green #083031 for text and primary, mustard #ffc942 sparingly.
- Do keep headings tight (-2.4px at display size, -1.2px at 55.6408px).
- Do let the robot imagery and ring-eyes motif carry personality.
- Don't add shadows; only one was measured.
- Don't use pure black for text.
- Don't invent button styles; none was measured.

## Responsive Behavior
Scope: one desktop pass at 1280px and one mobile pass at 390px were measured; no other viewport widths were recorded.
At 390px the h1 is 72.5878px with 72.5878px line height and -2.4px tracking, in a 145px-high box (two lines). Nav collapse and band reflow were not measured.

## Iteration Guide
For new sections, decide the band color first (white, #0f4233, #cee8e1 or #ffc942), then pick text color to match (#083031 on light bands, #ffffff or #ffffffb2 on deep green), then set the headline at one of the measured steps (107.461px, 91.4612px, 55.6408px, 36.3429px). Keep letter-spacing negative on the larger sizes. Reuse the ring-eyes or bracket motifs rather than adding unrelated icons.
1. Tokens: canvas #ffffff, ink and primary #083031, surface #0f4233, card #cee8e1, accents #ffc942 and #61e5c0.
2. Type: Roobert 500 display with -2.4px tracking, 400 for headings.
3. Build the floating nav pill and rounded video hero.
4. Alternate white, deep-green, pale-green and mustard bands.
5. Run `node web/scripts/verify-designs.mjs --slug=serve-robotics`.
Not measured: hover beyond one nav sample, dark mode, motion.
