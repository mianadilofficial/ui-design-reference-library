---
version: alpha
name: Delta Air Lines
category: "Airlines"
description: "Delta Air Lines (delta.com): a navy-and-red airline booking site. Whitney Condensed 300 hero headlines at 48px/44px, Whitney 14px–18px UI text in #3e414f, #e01933 red 4px-radius Find Flights buttons 64px tall (hover #ad1834), a #001122 navy gradient header and footer, and white 8px-radius cards with #dfe0e6 borders."
colors:
  canvas: "#ffffff"
  ink: "#3e414f"
  primary: "#e01933"
  on-primary: "#ffffff"
  navy-deep: "#001122"
  border-subtle: "#dfe0e6"
  ink-navy: "#001e3c"
  ink-muted: "#9599ac"
  link-blue: "#0066cc"
  ink-black: "#000000"
  primary-hover: "#ad1834"
  text-input-border: "#80859c"
typography:
  display:
    fontFamily: "\"Whitney Condensed\", sans-serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 44px
    letterSpacing: 0.24px
  display-mobile:
    fontFamily: "\"Whitney Condensed\", sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 32px
    letterSpacing: 0.18px
  card-title:
    fontFamily: Whitney, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 30px
  subheading:
    fontFamily: Whitney, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: Whitney, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: Whitney, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Whitney, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
  input:
    fontFamily: Whitney, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 22px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 14px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 34px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    padding: 0px 32px
    height: 64px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.sm}"
    padding: 0px 32px
    height: 64px
  button-outline-small:
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 28px
    borderColor: "{colors.canvas}"
  booking-tab:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-navy}"
    padding: 12px
    height: 44px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 24px 16px 10px 15px
    height: 64px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-navy}"
    typography: "{typography.card-title}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.border-subtle}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 45, 89, 0.02) 0px 38px 23px 0px, rgba(0, 45, 89, 0.03) 0px 17px 17px 0px, rgba(0, 45, 89, 0.05) 0px 4px 9px 0px
---

# Delta Air Lines

## Overview

Delta Air Lines' home page (delta.com, title "Delta Air Lines | Flights & Plane Tickets + Hotels & Cars") is a booking tool first and a brand page second. The measured page is 1280px wide and 3332px tall. A deep navy header carries the Delta widget logo and wordmark, the primary navigation (Book, Check-in, My Trips, Flight Status, Travel Info, SkyMiles, Need Help?), a small outlined "Sign Up" button, a red "Log in" button, a notification bell and search. Below it, a second navy row of tabs (Flights, Stays, Cars, Vacations, Cruises) leads into a white booking panel: a large "BKK ⇄ To" airport pair, Round Trip and date selects, a passenger count, a red "Find Flights" button and checkboxes such as "Shop with Miles" and "Include Basic".

Under the booking panel a photographic hero (a sunset harbour town) carries "Book Your Next Trip" in Whitney Condensed and a red "Explore Offers" button. The white middle of the page, introduced by the overline "THE DELTA CUSTOMER EXPERIENCE" and the heading "Supporting You Through Your Travel Journey", stacks bordered cards: a wide icon card ("How Can I Change/Cancel My Flight?"), three photo cards (Onboard Experience, Ready for Adventure?, Premium Travel), a route-map card and a Fly Delta app card. The page closes on a navy footer with a "Try Asking Me A Question" search box, popular topics, four link columns and social icons.

The tone is practical and reassuring ("We understand that your plans may change. It's simple to cancel or change your flight..."), with photography of cabins and destinations and a single navy line icon of a calendar with a plane.

## Colors

- **canvas `#ffffff`** — the page background, booking panel, cards and inputs; the largest painted area.
- **ink `#3e414f`** — the most-read text colour (818 characters): body copy and input values.
- **primary `#e01933`** — Delta red, the fill of "Find Flights", "Explore Offers" and "Log in". On hover it darkens to **primary-hover `#ad1834`** (recorded on "Log in" and "Find Flights"). A third red, `#c01933`, is measured as a tiny background area.
- **on-primary `#ffffff`** — white button labels.
- **navy-deep `#001122`** — the header and footer navy. The nav is painted with `linear-gradient(rgb(0, 25, 50), rgb(0, 17, 34))`, and the measured bands are `#001931`, `#001428`, `#001932` and `#001429`. `#003366` is measured as a small background.
- **ink-navy `#001e3c`** — card titles, the airport code "BKK", the active tab label and some borders (374 characters of text).
- **ink-muted `#9599ac`** — the "Popular Topics:" label and the fine-print terms line in the footer. `#6c718a` is also measured on 24 characters.
- **link-blue `#0066cc`** — inline action links inside cards: "Start a Change", "Explore Options", "Search Deals", "Explore Map", "Go to Download".
- **ink-black `#000000`** — the measured nav-link colour (in the menus).
- **border-subtle `#dfe0e6`** — the 1px border of every card and a large background area (426); **text-input-border `#80859c`** — the 1px border of the booking input. `#ededed` is another measured background.

## Typography

Delta self-hosts Whitney (300, 400, 500, 600) and Whitney Condensed (375), served from `/content/dam/delta-applications/mach-1/assets/fonts/`. Whitney is used on 2427 characters; Whitney Condensed only on the 19-character hero headline.

- **Display — Whitney Condensed 300, 48px / 44px, 0.24px tracking.** "Book Your Next Trip", white on the hero image. The only Whitney Condensed cut loaded is weight 375.
- **Section heading — Whitney 600, 36px, -0.54px tracking** ("Supporting You Through Your Travel Journey", centred in `#001e3c`); the "BKK" airport code also measures 36px 600.
- **Card title — Whitney 600, 24px / 30px**, in `#001e3c`.
- **Subheading / button — Whitney 600, 18px / 24px.** The "Find Flights" and "Explore Offers" labels and the footer "Popular Topics:" heading.
- **Nav — Whitney 400, 16px / 24px.** 16px is the most common size on the page (1332 characters).
- **Body — Whitney 400, 14px / 20px.**
- **Link — Whitney 600, 12px / 16px.** Secondary-row header links such as "Delta AMEX Cards".
- **Input — Whitney 500, 18px / 22px.**

The overline "THE DELTA CUSTOMER EXPERIENCE" is measured at 16px with 4px tracking (29 characters). **Substitute:** Whitney is a commercial Hoefler&Co face; use Source Sans 3 or Inter for Whitney and a condensed sans such as Roboto Condensed Light for Whitney Condensed.

## Layout

The layout is a centred column inside a 1280px page. The header bands span the full width with content between x=330 and x=1074 in the utility row; the white body content runs between x=40 and x=1240, with the cards in the capture sitting in a narrower centred container. The card grid measures up to 4 columns on desktop; the capture shows a full-width card, a row of three photo cards, then two wide split cards (text + image).

Spacing is tight and regular: the most frequent gaps are 8px, 4px, 24px and 16px, and the most frequent paddings are 12px, 32px and 16px. Buttons use 0px 32px horizontal padding, the booking tabs 12px, the booking input 24px 16px 10px 15px (the label floats inside the top padding). The footer content runs from x=144 to x=1136 in four link columns (About Delta, Customer Service, Site Support, Policies).

## Elevation & Depth

Cards use a layered, navy-tinted shadow: `rgba(0, 45, 89, 0.02) 0px 38px 23px 0px, rgba(0, 45, 89, 0.03) 0px 17px 17px 0px, rgba(0, 45, 89, 0.05) 0px 4px 9px 0px` (6 elements). It is very faint and combined with a 1px `#dfe0e6` border, so cards look outlined rather than floating. The hero photo carries a `#0000005e` (37% black) overlay behind the headline. The header and footer get depth from the vertical navy gradient rather than shadows. The stylesheet also contains `0px 2px 10px -3px #999` and `0px 0px 12px 2px #c7c5c7`, which were not seen on rendered home-page elements.

## Shapes

Corners are small and consistent. Buttons use 4px (9 elements, the most common radius). Cards use 8px; the booking tabs use 8px 8px 0px 0px (a tab attached to the panel below it); one element uses 0px 0px 8px 8px. Inputs use 6px. Other measured radii: 10px, 14px, 2px 0px 0px 2px and one 9999px pill (the notification badge). Lines are 1px, and the outlined "Sign Up" button uses a 2px `#ffffff` border. Icons are simple line icons; the logo is the Delta widget mark with the spaced DELTA wordmark, white on the navy header.

## Components

- **Primary button** — `#e01933` fill, white Whitney 600 18px/24px label, 4px radius, 0px 32px padding, 64px tall ("Find Flights", "Explore Offers"); hover fill `#ad1834`.
- **Small header buttons** — "Sign Up": transparent with a 2px `#ffffff` border, white Whitney 600 14px/18px, 0px 12px padding, 28px tall, 4px radius. "Log in": the same size filled `#e01933` (hover `#ad1834`).
- **Booking tab** — white tab with `#001e3c` Whitney 600 14px label and icon, 12px padding, 44px tall, 8px 8px 0px 0px radius; a red underline marks the active top-nav item ("Book").
- **Booking input** — white, 1px `#80859c` border, 6px radius, 64px tall, Whitney 500 18px/22px `#3e414f` value with a small floating label.
- **Card** — white, 1px `#dfe0e6` border, 8px radius, the layered navy shadow, Whitney 600 24px/30px `#001e3c` title, 14px `#3e414f` copy and a `#0066cc` text link.
- **Checkbox row** — square checkboxes with labels ("Shop with Miles", "My Dates are Flexible", "Include Basic", "Refundable Only") and a blue "Advanced Search" link.
- **Footer** — navy gradient, a white search input with a search icon, "Popular Topics:" in `#9599ac` with white bold topic links, four columns of white links, fine print and social icons.

## Design System Architecture

No public Delta design system or brand guideline was found. The Delta News Hub (https://news.delta.com/) links to media kits and images, and the media kit page (https://news.delta.com/media-resource/media-kits) contains no brand guidelines, colour values or typefaces. The shipped site shows the de-facto system: font files are served from a `delta-applications/mach-1/assets/fonts/` path, the stylesheet references CSS variables with an `mds-` prefix (`--mds-styling-stroke-03`, `--mds-stroke-focus`, `--mds-stroke-alert`), and the page also ships Tailwind utility variables (`--tw-ring-color: rgb(147 197 253 / .5)`, `--tw-ring-offset-color: #fff`). The documented values here are the computed styles from the live page: Whitney / Whitney Condensed, red `#e01933` actions, navy `#001122`–`#001e3c` structure, 4px/6px/8px radii and an 8px/16px/24px/32px spacing rhythm.

## Do's and Don'ts

**Do**
- Reserve `#e01933` red for primary actions and darken to `#ad1834` on hover.
- Use deep navy (`#001122` gradient) for the header and footer and `#001e3c` for headings.
- Keep body text in `#3e414f` Whitney 14px/20px and links in `#0066cc`.
- Use 4px radius on buttons, 6px on inputs, 8px on cards.
- Outline cards with a 1px `#dfe0e6` border and the faint navy shadow.
- Keep the booking panel the first thing on the page.

**Don't**
- Don't use Whitney Condensed for anything except the short hero headline.
- Don't use red for text links or large surfaces.
- Don't use pill buttons; the only 9999px radius is a badge.
- Don't add heavy shadows or coloured card backgrounds.
- Don't treat the Tailwind ring blue `rgb(147 197 253 / .5)` as a brand colour.

## Responsive Behavior

The extractor's 390px mobile pass recorded: the largest hero text becomes a promo link, "As High As 80K Bonus Miles", in Whitney Condensed 300 32px / 32px with 0.18px tracking. The fine-print body text measures Whitney 400 12px / 16px in `#9599ac` (14px/20px on desktop). The mobile primary CTA is "Learn More": `#e01933` fill, white Whitney 600 14px/18px, 15px 12px padding, 40px tall, 4px radius. The nav keeps the `linear-gradient(rgb(0, 25, 50), rgb(0, 17, 34))` navy and shows "Sign Up", "Log in" and the Book / Check-in / My Trips / Flight Status items. The layout probe counted 0 visible header text links on mobile (12 on desktop) and a maximum of 2 card columns (4 on desktop). Mobile font sizes measured: 16px, 14px, 12px, 18px, 24px, 32px, 20px, 36px and 10px. Stylesheet breakpoints: 768px and 992px (max-width 767px / 991px), plus 1200px and 1440px. Booking-panel arrangement at mobile width was not measured.

## Iteration Guide

1. Start with a white page framed by a navy gradient header and footer (`rgb(0, 25, 50)` to `rgb(0, 17, 34)`).
2. Put the booking panel first: white tabs (8px top radius), 64px inputs with `#80859c` borders and 6px radius, and a 64px red "Find Flights" button.
3. Set all UI in Whitney; use Whitney Condensed 300 48px/44px only for the hero line over a photo with a `#0000005e` overlay.
4. Build content as white 8px cards with 1px `#dfe0e6` borders, the faint navy shadow, 24px/30px `#001e3c` titles and `#0066cc` links.
5. Keep red `#e01933` (hover `#ad1834`) for actions only.
6. Space with 8px, 16px, 24px and 32px; pad buttons 0px 32px.
7. Write short, helpful, plain copy that names the task ("Start a Change", "Explore Map").
