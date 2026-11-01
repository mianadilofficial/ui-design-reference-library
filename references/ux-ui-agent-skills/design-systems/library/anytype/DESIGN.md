---
version: alpha
name: Anytype
category: "Productivity & SaaS"
description: "Anytype (anytype.io), \"a safe haven for digital collaboration\": a stark black-and-white grid site. Riccionets serif display type from 88px to 120px with tight negative tracking, Inter 300 18px/26px body, a #000000 6px-radius Download button, 1px #5b5b5b grid lines on black bands, and #ff6a7b coral and #3cd9b3 mint accents."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-muted: "#808080"
  ink-subtle: "#666666"
  accent-mint: "#3cd9b3"
  accent-coral: "#ff6a7b"
  hairline: "#5b5b5b"
typography:
  display:
    fontFamily: riccionets, Helvetica, sans-serif
    fontSize: 96px
    fontWeight: 400
    lineHeight: 90px
    letterSpacing: "-2.4px"
  display-mobile:
    fontFamily: riccionets, Helvetica, sans-serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: riccionets, Helvetica, sans-serif
    fontSize: 88px
    fontWeight: 400
    lineHeight: 76px
    letterSpacing: "-2.4px"
  subheading:
    fontFamily: riccionets, Helvetica, sans-serif
    fontSize: 120px
    fontWeight: 400
    lineHeight: 100px
    letterSpacing: "-3.2px"
  body:
    fontFamily: inter, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 26px
    letterSpacing: "-0.28px"
  button:
    fontFamily: inter, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.12px"
  nav:
    fontFamily: inter, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: "-0.28px"
  link:
    fontFamily: inter, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: "-0.28px"
rounded:
  xs: 6px
  sm: 16px
spacing:
  s1: 1px
  s2: 8px
  s3: 10px
  s4: 16px
  s5: 18px
  s6: 20px
  s7: 32px
  s8: 40px
  s9: 48px
  s10: 52px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 36px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 1px 0px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-muted}"
---

# Anytype

## Overview

Anytype is a local-first, encrypted workspace for notes, chats and databases, and anytype.io (title "Anytype — A safe haven for digital collaboration") presents it as an editorial, almost print-like site. The page scrolls inside an inner container (9201px of content in a 2400px-tall window, 1280px wide). The structure is a ruled grid: sections are boxed by thin lines, and the page alternates pure white and pure black bands.

The header is minimal: the lowercase "anytype" wordmark at the left, a centred announcement link ("Run your company on Anytype · Encrypted, Swiss-based, yours →"), a black "Download" button with an Apple logo and a two-line menu icon at the right. The hero sets "A safe haven" in a black sans beside "for digital collaboration" in large coral serif, next to a pixel-style black line illustration of a desktop (photo frame, calendar "31", smiling laptop, inbox tray). A soft peach-to-pink gradient glows at the hero's lower right. Below, a four-cell row reads "Private & Secure", "Offline & Online", "Work & Play" and a black "Watch Chat Introduction" video tile.

The black band that follows is headed "discuss, organize, remember" in white serif, with three cells (Private Chats, Private Documents, Private Databases) that show dark UI fragments — chat bubbles, a "My Idea" page card, and a list of Pages / Lists / Tasks / Bookmarks rows — and a full-width "Read more" row. Later sections use very large serif statements ("Enjoy true privacy", "Never lose access", "Trust, not believe", "Compose beautifully", "Think Fast") beside sans-serif explanations, with a floating "WHAT / WHY / WHO" pill switcher. The voice is confident and principled.

## Colors

- **canvas `#ffffff`** — white bands and the header.
- **page-largest `#000000`** — the largest painted area (9529 vs 5211 for white): black feature bands, the testimonial band and the footer.
- **ink `#000000`** — text on white (1093 characters); white `#ffffff` is the most-read text overall (1234 characters) because of the black bands.
- **primary `#000000` / on-primary `#ffffff`** — the Download button. On hover its fill becomes `oklab(0 none none / 0.9)`, a 90% black.
- **accent-coral `#ff6a7b`** — the serif hero words "for digital collaboration" (26 characters).
- **accent-mint `#3cd9b3`** — a second accent used on 27 characters of text.
- **ink-muted `#808080`** — footer text and secondary copy on black (306 characters).
- **ink-subtle `#666666`** — secondary text on white (112 characters).
- **hairline `#5b5b5b`** — the most frequent border colour (9 elements), the grid lines; `#3c3c3c` is the darker line on black (4 elements). A translucent `#45434366` is measured as a small background area.

The pastel glow in the hero and the colour in UI fragments (blue, indigo, green and orange icons) are imagery, not interface colours. The CSS declares `--swiper-theme-color: #007aff`, which is the Swiper library default and not a brand colour.

## Typography

Two self-hosted families, declared as `--font-primary: "inter", Helvetica, sans-serif` and `--font-secondary: "riccionets", Helvetica, sans-serif`.

- **Riccionets 400** — the display serif, used only for very large statements (81 characters in total). Display: 96px / 90px with -2.4px tracking (the coral hero words). Heading: 88px / 76px, -2.4px ("discuss, organize, remember"). Statement: 120px / 100px, -3.2px ("Enjoy true privacy"). Line heights are below the font size, so stacked lines nearly touch. 80px with -5.2px and 88px with -5.2px are also measured.
- **Inter 300 / 400 / 500** — everything else (2717 characters). Body: 300, 18px / 26px, -0.28px (the most common size, 1380 characters). Nav: 400, 16px / 26px. Links: 400, 18px / 26px. Button: 500, 14px / 20px, -0.12px. Larger Inter sizes are measured too: 48px with -2.4px tracking (360 characters; the testimonial band headings measure 48px), 36px/-1.6px (500 weight, "Offline-first"), 28px/-0.64px and 22px/-0.48px. The hero's "A safe haven" is measured at 88px weight 300.

Every size carries negative tracking. **Substitutes:** Riccionets is a custom face; a high-contrast serif such as Instrument Serif or Fraunces at 400 gives a similar feel. Inter is free.

## Layout

The page is a strict ruled grid inside a 16px outer margin: content runs from x=16 to x=1264, and boxes are separated by 1px lines (`#5b5b5b` on black, the same grey in the hero frame). The hero frame is a large box split into heading and illustration, over a row of four equal cells. The black feature band uses three columns with a full-width footer row. Later bands split 50/50 between a huge serif word and a sans explanation. The testimonial band measures six columns at its widest.

Spacing is large and even. Gaps: 80px (most frequent), 16px, 120px, 8px. Paddings: 16px, 32px, 10px, 40px, 64px, 20px, 52px, 96px and section paddings of 124px–172px. The 120px statement block uses 80px 64px padding. The CSS declares `--offset-desktop: 16rem` and `--offset-mobile: 10rem`.

## Elevation & Depth

The site is flat. No box shadows were measured on rendered elements. Depth comes from the contrast between white and black bands and from the 1px grid lines. The only soft effect is the pastel gradient glow in the hero corner and the translucent grey floating switcher. The stylesheet's shadows (`0 1px 2px #00000026` and the `--plyr-*` range-thumb shadows) belong to the Plyr video player.

## Shapes

Shapes are square. Grid cells, bands and frames have 0px radius. Only two radii appear on rendered elements: 6px on the Download button and 16px (2 elements). The floating switcher is a rounded pill in the capture. The illustration style is black pixel-edged line art. The wordmark is lowercase "anytype" in a dark sans.

## Components

- **Download button** — `#000000` fill, white Inter 500 14px/20px with -0.12px tracking, 6px radius, 0px 16px padding, 36px tall, with an Apple logo; hover fill 90% black.
- **Announcement link** — centred in the header, Inter 14px black with an arrow.
- **Feature cell** — a ruled box with a centred Inter title ("Private & Secure") and three lines of centred copy.
- **Dark feature cell** — on black: a UI illustration at the top, a white Inter title ("Private Chats") and `#808080` copy.
- **List row** — dark rounded rows with a coloured icon, a white label and a chevron (Pages, Lists, Tasks, Bookmarks).
- **Read more row** — a full-width ruled cell with centred white Inter 18px text.
- **Statement block** — a Riccionets word set at 120px/100px beside a numbered step box and a sans heading.
- **Section switcher** — a floating translucent grey pill with "WHAT / WHY / WHO" uppercase labels.
- **Footer** — black, `#808080` Inter 14px/20px links (Download, Subscribe to updates, Anytype for Business, Use Cases…).

## Design System Architecture

No public Anytype marketing design system or brand page was found. https://anytype.io/press returned HTTP 404, and the anyproto GitHub organisation (https://github.com/anyproto) lists the clients (anytype-ts for desktop, anytype-swift for iOS) but no design-system, brand or UI-kit repository. The website's de-facto system is small and visible in its CSS: two font variables (`--font-primary` Inter, `--font-secondary` Riccionets), `--font-weight-thin: 100`, layout offsets (`--offset-desktop: 16rem`, `--offset-mobile: 10rem`), a Tailwind CSS base (`--default-transition-timing-function: cubic-bezier(.4,0,.2,1)`), Swiper for carousels and Plyr for video. Everything else is expressed directly: black and white bands, 1px grey rules, a single black button and two accent colours used sparingly in text.

## Do's and Don'ts

**Do**
- Alternate pure white and pure black bands and divide content with 1px grey rules.
- Set big statements in Riccionets at 88px–120px with line height below the size and negative tracking.
- Set all reading text in Inter 300 18px/26px with -0.28px tracking.
- Keep the only button black with a 6px radius.
- Use coral `#ff6a7b` (or mint `#3cd9b3`) for a single highlighted phrase.
- Illustrate with black pixel line art and dark UI fragments.

**Don't**
- Don't add shadows or rounded cards; the grid is square and flat.
- Don't use Riccionets for body text or small headings.
- Don't use colour for buttons or backgrounds.
- Don't use positive letter-spacing.
- Don't treat the Swiper `#007aff` default as a brand colour.

## Responsive Behavior

The extractor's 390px mobile pass recorded: the coral hero words at Riccionets 44px / 40px with -0.8px tracking (328px wide), and the "discuss, organize, remember" heading at the same 44px / 40px. Body copy drops to Inter 300 16px / 24px with -0.2px tracking. The Download button is unchanged (black, 14px/20px, 6px radius, 0px 16px padding, 36px tall). The header measures 60px tall on mobile (80px on desktop) with "Download" as the only detected item. The layout probe recorded 1 visible header link on mobile and 2 on desktop, and a maximum of 1 card column on mobile versus 4 on desktop. Mobile font sizes measured: 16px, 14px, 28px, 18px, 22px, 44px, 40px and 64px. CSS breakpoints: 480px, 768px, 1024px, 1240px and 1440px. The arrangement of the grid lines at mobile width was not measured.

## Iteration Guide

1. Start with a white band framed by a 1px grey box, 16px from the viewport edge.
2. Pair a sans phrase with a Riccionets serif phrase in coral `#ff6a7b` at 96px/90px, beside black line art.
3. Add a row of equal ruled cells with centred Inter titles and short copy.
4. Follow with a black band: a white Riccionets 88px heading and three ruled dark cells with UI fragments, `#808080` copy and `#5b5b5b` lines.
5. Keep reading text Inter 300 18px/26px; keep every tracking value negative.
6. Use one black Download button (6px radius, 36px tall) as the only button style.
7. Space sections with 80px–120px gaps and finish on a black footer.
