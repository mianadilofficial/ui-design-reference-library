---
version: alpha
name: Pipedrive
category: "Product & SaaS"
description: "Pipedrive's CRM homepage sets a Haffer 52px/700 green #017737 headline on a mint #d7f9d3 hero, Inter body text in navy #192435 on white, violet #6861f2 4px-radius 'Try it free' buttons that deepen to #413d99 on hover, lavender #e1e1ff secondary buttons and a yellow #ffde00 pill."
colors:
  canvas: "#ffffff"
  ink: "#192435"
  ink-black: "#000000"
  ink-muted: "#656e7a"
  primary: "#6861f2"
  primary-strong: "#413d99"
  on-primary: "#ffffff"
  lavender-tint: "#e1e1ff"
  surface-lavender: "#f7f7fe"
  mint: "#d7f9d3"
  green: "#017737"
  yellow: "#ffde00"
  hairline: "#e4e6e9"
  input-bg: "#f4f5f6"
typography:
  display:
    fontFamily: Haffer, "Haffer Fallback", sans-serif
    fontSize: 52px
    fontWeight: 700
    lineHeight: 62px
  display-mobile:
    fontFamily: Haffer, "Haffer Fallback", sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 42px
  heading:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43px
  subheading:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25px
  body-large:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 32px
  button-small:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 24px
  link-strong:
    fontFamily: Inter, "Inter fallback", sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 12px
  md: 24px
  lg: 40px
  xl: 100px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-strong}"
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 9px 20px
    height: 42px
  button-soft:
    backgroundColor: "{colors.lavender-tint}"
    textColor: "{colors.primary-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 56px
  button-yellow:
    backgroundColor: "{colors.yellow}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 20px
    height: 56px
  announcement-bar:
    backgroundColor: "{colors.primary-strong}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link-strong}"
  nav:
    backgroundColor: "{colors.canvas}"
  text-input:
    backgroundColor: "{colors.input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 0px 0px 0px 44px
    height: 44px
  review-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-large}"
    rounded: "{rounded.xs}"
    padding: 40px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 80px 32px 40px
---

# Pipedrive

## Overview

Pipedrive (https://www.pipedrive.com/) is a sales CRM; the page title is "Sales CRM & Pipeline Management Software | Pipedrive". The homepage is bright, friendly and conversion-focused: a mint-green hero, a violet action colour, and long explanatory sections with checkmark lists, product screenshots and customer quotes.

The capture opens with a thin violet #413d99 announcement bar ("Pipedrive Nova: Spend less time on meeting admin, more time selling. Learn more"). The white header holds the round green "p" logo mark, dropdown links (Features, Why Pipedrive, Resources), Contact sales and Pricing, then a search icon, language selector, "Log in" and a violet "Try it free" button. The hero is mint #d7f9d3: the two-line headline "The easy and effective CRM for closing deals" in green #017737, a paragraph, a five-item green-check list ("14-day free trial, no credit card required", "Trusted by over 100,000 companies"…), a violet "Try it free" and a lavender "Contact sales" button, and a small "Full access. No credit card required." note. On the right, a laptop and phone show the Pipedrive deal pipeline, with floating report and meeting-transcript cards.

Below: a "Trusted by 100,000+ companies in 179 countries" logo carousel; a "NEW" badge and "Meeting intelligence built into every deal" section for Nova with a purple video panel and a yellow pill "Try it free" next to a lavender "Find out more"; "CRM software sales teams will love" with a two-tab switch ("I've used a CRM before" / "I haven't used a CRM before") and alternating feature rows with quotes; a mint "Join 100,000+ companies" strip; customer stories with large figures ("$2.5m", "12"); a marketplace section with integration logos; a tabbed "Optimize your sales process" product tour; award badges; blog cards; a two-column FAQ; a mint closing CTA ("Driving business growth") and a white footer.

The voice is helpful and plain ("The easy and effective CRM", "Never miss a follow-up"), with many concrete proof points.

## Colors

Pipedrive's CSS exposes about 400 custom properties in two families: global and semantic `--pd-*` tokens and website-specific `--pd-puco-*` tokens. The rendered colours map onto them:

- **canvas #ffffff** — page background (the largest measured area).
- **ink #192435** — the dominant text colour (10,967 characters), a deep navy.
- **ink-black #000000** — secondary text colour (564 characters).
- **ink-muted #656e7a** — muted grey for captions and secondary copy.
- **primary #6861f2** — `--pd-color-primary-default`; the violet fill of "Try it free" and "Watch demo".
- **primary-strong #413d99** — `--pd-color-primary-strong`; the hover fill of violet buttons, the announcement bar and the text of lavender buttons.
- **on-primary #ffffff** — text on violet.
- **lavender-tint #e1e1ff** — the fill of "Contact sales" / "Find out more".
- **surface-lavender #f7f7fe** — pale lavender sections (second-largest area); the CSS declares a near-identical `--pd-color-brand-landing-secondary: #f8f8fe`.
- **mint #d7f9d3** — the hero and the "Join 100,000+ companies" and closing CTA bands.
- **green #017737** — the hero headline colour and check icons.
- **yellow #ffde00** — the yellow pill CTA in the Nova section.
- **hairline #e4e6e9** — borders and dividers.
- **input-bg #f4f5f6** — the search field fill.

Related brand tokens declared in CSS but not measured as rendered here: `--pd-global-color-brand-green-100: #ebfce9`, `--pd-global-color-brand-green-300: #aee9b4` (also `--pd-color-brand-landing-growth`), `--pd-global-color-brand-green-500: #012710`, `--pd-puco-color-primary-mid: #c4c2ff`.

## Typography

Two families are loaded. **Haffer** (weight 700) is used only for the hero headline (44 characters); **Inter** (400, 600, 700) carries everything else (11,919 characters). Haffer is a licensed commercial typeface; a grotesque with a similar heavy weight is the substitute, and the site's own fallback for Haffer is "Haffer Fallback". Inter is open source.

- **display** — Haffer 52px / 62px, weight 700 (`--pd-puco-font-website-h1-desktop-line-height: 62px`).
- **display-mobile** — Haffer 32px / 42px, weight 700 (`--pd-puco-font-website-h1-mobile-line-height: 42px`).
- **heading** — Inter 36px / 43px, weight 700 (section titles).
- **subheading** — Inter 30px / 36px, weight 700 (feature row titles).
- **body** — Inter 14px / 25px, weight 400. The most-read size (5,704 characters); the CSS calls it `--pd-puco-font-website-body-s-*` (14px / 25px).
- **body-large** — Inter 18px / 30px, weight 400 (review cards and lead paragraphs; 4,848 characters at 18px; `--pd-puco-font-website-body-font-size: 18px`).
- **button** — Inter 22px / 32px, weight 700. Large CTAs use a big, bold label.
- **button-small** — Inter 18px / 24px, weight 700 (header button).
- **link-strong** — Inter 14px / 21px, weight 700 ("Learn more").

No letter-spacing adjustments were measured; every size uses normal tracking. The CSS also defines h5 at 22px and h6 at 20px (`--pd-puco-font-website-h5-both-font-size`, `--pd-puco-font-website-h6-both-font-size`).

## Layout

The desktop capture is 1,280px wide and 8,714px tall. The announcement bar is 45px and the header 88px tall. The hero is 833px tall with the text column from x 40 to x 624 and the product image on the right. Sections alternate text and image in two columns; customer stories, blog posts and award badges run in rows of three or more. The extraction reports a maximum of three card columns.

Spacing tokens: 3px, 4px, 5px, 7px, 8px, 9px, 10px, 12px, 16px, 20px. The dominant padding is 20px (69 uses), then 10px and 4px; gaps are 20px (34 uses), 4px, 5px, 10px and 44px. Large paddings of 40px and 80px frame cards and sections. The CSS spacing scale includes `--pd-spacing-75: 6px` and `--pd-size-800: 64px`.

## Elevation & Depth

No box-shadows were measured on the home page. Depth comes from colour bands (mint, lavender, white) and from the product screenshots, which include their own device frames and floating UI cards. Review cards and FAQ items sit flat on their backgrounds. Keep components flat.

## Shapes

The radius set is 4px, 12px, 24px, 40px, 100px, a pill and 50% circles. 4px (29 elements) is the default for buttons and cards (`--pd-radius-s: 4px`, `--pd-radius-m: 4px`). 50% circles (17) are avatars and carousel controls. 24px rounds image panels, including 0px 0px 24px 24px bottom-rounded panels. The yellow CTA uses 40px (a pill at its 56px height), and the search input uses 100px. The mix is deliberate: most actions are crisp 4px rectangles, and the one pill-shaped yellow CTA stands out.

## Components

**Primary button.** #6861f2 fill, white Inter 700 22px / 32px, 4px radius, 12px 20px padding, 56px tall; hover #413d99.

**Header button.** Same violet, Inter 700 18px / 24px, 9px 20px padding, 42px tall ("Try it free").

**Soft button.** #e1e1ff fill with #413d99 text, same size as the primary ("Contact sales", "Find out more").

**Yellow pill.** #ffde00 with #192435 text, 40px radius, 56px tall ("Try it free" in the Nova section).

**Announcement bar.** #413d99 full width, white 14px text with a bold "Learn more".

**Check list.** Green check icons with navy 14px–18px text and bold lead-ins ("Briefed before:", "Focused during:").

**NEW badge.** A small rounded violet label above a section heading.

**Tabs.** Text tabs with a green underline on the active tab ("I've used a CRM before").

**Review card.** White, 4px radius, 40px padding, star rating, 18px / 30px quote, author line.

**Search input.** #f4f5f6, 100px radius, 44px tall, 44px left padding for the magnifier icon.

**FAQ.** Two columns of questions separated by hairline rules, each with a chevron.

**Footer.** White, four link columns, language selector and legal links; padding 80px 32px 40px.

## Design System Architecture

Pipedrive does not publish a public brand or design-system site that could be opened: https://www.pipedrive.com/en/about/press returned 404, the About page (https://www.pipedrive.com/en/about) links only to a newsroom (https://www.pipedrive.com/en/newsroom) and a media contact, and the newsroom offers no media kit, logos or brand guidelines.

The shipped CSS shows a mature token system (400 root custom properties):

- **Global primitives** — `--pd-global-color-light-neutral-*`, `--pd-global-color-dark-purple-*`, `--pd-global-color-dark-red-*`, `--pd-global-color-brand-green-*`.
- **Semantic tokens** — `--pd-color-primary-default`, `--pd-color-primary-strong`, `--pd-color-text-warning`, `--pd-color-negative-extra-strong`, `--pd-color-fill-medium-strong`, `--pd-color-icon-muted`, `--pd-color-surface-foreground`, `--pd-color-navigation-icon`.
- **Non-semantic palette** — named hue scales such as `--pd-non-semantic-color-sky-blue-88`, `--pd-non-semantic-color-lavender-purple-80`, `--pd-non-semantic-color-honey-yellow-108`, `--pd-non-semantic-color-teal-green-148`.
- **Type tokens** — composite `font` shorthands (`--pd-font-body-s-strong-font: 600 12px/18px "Inter"`) and website-specific sizes per breakpoint (`--pd-puco-font-website-h1-desktop-*`, `--pd-puco-font-website-h1-mobile-*`).
- **Component and motion tokens** — `--pd-puco-button-height-s: 32px`, `--pd-puco-size-icon-xl: 60px`, z-index tokens and named easing curves (`--pd-animation-exit-speedcurve: cubic-bezier(.7,0,1,1)`).

## Do's and Don'ts

**Do**
- Use violet #6861f2 for primary actions with white bold labels; hover to #413d99.
- Pair it with the lavender #e1e1ff soft button for secondary actions.
- Open with a mint #d7f9d3 hero and a green #017737 headline in a heavy grotesque.
- Write body copy in Inter navy #192435 at 14px / 25px or 18px / 30px.
- Use green check lists to make benefits scannable.
- Keep buttons and cards at 4px radius; reserve the pill shape for a single yellow highlight CTA.

**Don't**
- Don't use the violet for headlines; headlines are green (hero) or navy.
- Don't add drop shadows.
- Don't letter-space text; Pipedrive uses normal tracking.
- Don't use Haffer for body copy; it appears only in the hero headline.
- Don't make every CTA yellow; it is an accent used once.

## Responsive Behavior

At 390px the mobile pass measured the hero headline at Haffer 32px / 42px, the section heading at Inter 30px / 38px, body text unchanged at 14px / 25px, and the primary "Try it free" button at 22px bold, 12px 20px padding, 56px tall and 310px wide. The header measured 72px tall on white and the mint hero 1,225px tall. An "Open menu" toggle was visible with one header link visible (five on desktop).

The mobile capture shows the hero text above the product image, and the feature rows with the image above or below the text in a single column.

The stylesheet's breakpoints cluster at 1103px / 1104px (`max-width: 1103px`, 61 rules) and 712px / 713px (`max-width: 712px`, 55 rules), with further `min-width` rules at 1400px and 1600px. Behaviour at intermediate widths was not measured.

## Iteration Guide

1. Start with a white canvas, navy #192435 text and a mint #d7f9d3 hero.
2. Set the hero headline in Haffer 700 52px / 62px in #017737 (32px / 42px on mobile); set every other heading in Inter 700.
3. Build buttons at 56px with 22px bold labels and 4px radius: violet #6861f2 primary, lavender #e1e1ff secondary.
4. Add green check lists, product screenshots and quotes in alternating two-column rows.
5. Use 20px as the default padding and gap; 40px inside cards; 80px between sections.
6. Keep everything flat and tracking normal.
7. Compare against the captures at 1,280px and 390px. Dark mode and hover states other than the violet buttons were not measured.
