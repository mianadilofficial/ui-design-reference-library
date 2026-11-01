---
version: alpha
name: AWS Amplify
category: "Design Systems"
description: "The AWS Amplify product page sits inside the AWS marketing shell: Amazon Ember Display at weight 500, a dark navy utility bar, a white header, #161d26 pill buttons (40px radius, 44px tall) beside outlined twins, a lilac-to-pink gradient hero, and soft #f3f3f7 cards at 24px radius. Amplify UI, its React library, uses Inter and 4px teal buttons instead."

colors:
  canvas: "#ffffff"
  page-largest: "#f3f3f7"
  ink: "#232b37"
  primary: "#161d26"
  on-primary: "#ffffff"
  surface-footer: "#0f141a"
  ink-faint: "#a4a4ad"
  ink-inverted: "#f9f9fb"
  link-blue: "#006ce0"
  hairline: "#d1d6db"
  status-negative: "#db0000"
  status-positive: "#00802f"
  amplify-ui-primary: "#047d95"
typography:
  display:
    fontFamily: "\"Amazon Ember Display\", \"Amazon Ember\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  display-mobile:
    fontFamily: "\"Amazon Ember Display\", \"Amazon Ember\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 36.008px
  subheading:
    fontFamily: "\"Amazon Ember Display\", \"Amazon Ember\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  body:
    fontFamily: "\"Amazon Ember Display\", \"Amazon Ember\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Amazon Ember Display\", \"Amazon Ember\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "\"Amazon Ember Display\", \"Amazon Ember\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.006px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 16px
  xl: 24px
  2xl: 28px
  3xl: 40px
  4xl: 80px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 10px 26px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 10px 26px
    height: 44px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 8px 16px
  utility-bar:
    textColor: "{colors.canvas}"
  utility-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xl}"
    padding: 28px 28px 20px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-inverted}"
---

## Overview

The AWS Amplify page is a product page inside the AWS marketing shell, so it carries two layers: AWS's global header and the Amplify product content. At the top, a dark utility bar holds language, Contact us, AWS Marketplace, Support and My account links; below it a white header holds the AWS logo, a reduced menu (re:Invent, Discover AWS, Products, Solutions, Pricing, Resources), Search, "Sign in to console" and a dark pill "Create account". Under that a floating white sub-navigation card (AWS Amplify: Overview, Features, Pricing, Getting Started, Customers) sits over a pale lilac-to-pink gradient that fills the hero.

The hero itself is quiet: a breadcrumb (Product › Front-End Web and Mobile › AWS Amplify), the headline "Fullstack TypeScript. Frontend DX for AWS." at 32px, two lines of supporting copy, and two pills (a dark "Deploy an app" and an outlined "Try a hands-on tutorial"). The rest of the page alternates text on the left with an illustration panel on the right: a purple video poster with the product name, then three soft-tinted panels (lavender, peach, periwinkle) containing small UI illustrations such as deployment cards and code windows. Text links are blue and underlined. A row of grey feature cards (Data, Auth, Storage) closes the captured area, and AWS chat prompts float over the lower-right of the screenshot.

**Key Characteristics:**
- Amazon Ember Display at weights 400 and 500: calm, lightly weighted headings rather than bold ones.
- Dark `{colors.primary}` pill buttons with an outlined twin.
- A restrained neutral palette with colour confined to soft gradient panels and blue links.
- Cards and panels with generous radii (`{rounded.lg}` 16px to `{rounded.xl}` 24px).
- Informational copy: short paragraphs, each followed by one underlined "Learn about..." link.

## Colors

`{colors.primary}` (a very dark navy) is both the button fill and the AWS text-primary colour; `{colors.on-primary}` white sits on it. `{colors.ink}` is the page body-text colour (`--rg-color-text-body` on the page), and `{colors.ink-inverted}` is the matching body text on dark surfaces. `{colors.ink-faint}` is a muted grey, `{colors.hairline}` the rule and outline colour.

Surfaces: `{colors.canvas}` white for the header and the sub-navigation card, `{colors.page-largest}` (a cool pale grey) for the largest area background and the feature cards, and `{colors.surface-footer}` for the near-black footer. Links are `{colors.link-blue}`, which the page publishes as its default, selected and pressed link colour. Status colours measured on the page's variables are `{colors.status-negative}` and `{colors.status-positive}`. The page defines gradient tokens (violet, teal, purple, blue, fuchsia, indigo, orange) as three-stop 123-degree gradients; the illustration panels and the hero wash use this family of tints rather than flat fills.

The Amplify UI documentation uses a different palette. Its measured Primary button is a teal, `{colors.amplify-ui-primary}`, so Amplify's product UI and its marketing page look different by design.

## Typography

The page loads Amazon Ember Display (400, 500 and 700) and Amazon Ember Mono (400); the stack ends in Helvetica Neue, Helvetica, Arial and sans-serif. Amazon Ember is a proprietary family; use Helvetica Neue or Arial where it is unavailable.

- **Display (`{typography.display}`)**: 32px, weight 500, line-height 40px; the page headline.
- **Display mobile (`{typography.display-mobile}`)**: 28px, weight 500, line-height about 36px.
- **Subheading (`{typography.subheading}`)**: 24px, weight 500, line-height 32px; section titles such as "Go from idea to app in hours".
- **Body (`{typography.body}`)**: 16px, weight 400, line-height 24px.
- **Button (`{typography.button}`)**: 16px, weight 500, line-height 24px.
- **Nav (`{typography.nav}`)**: 14px, weight 400, line-height about 20px.

No tracking is applied. The scale is narrow (14, 16, 24, 28 and 32px) and the headline barely larger than a subheading; hierarchy comes from spacing and position more than from size.

## Layout

In the capture, content aligns to a shared left edge with text on the left half and an illustration on the right half; the sub-navigation card and feature cards share the same left and right edges. Each feature row is a two-column split (copy left, illustration right) with the heading, a paragraph and a link stacked with generous vertical space between rows. The page also uses the AWS spacing system (`--rg-margin-*`; for example margin-4 is 16px), and the generated tokens give the measured steps `{spacing.s3}` 4px, `{spacing.s4}` 8px, `{spacing.s8}` 16px, `{spacing.s9}` 20px and `{spacing.s10}` 24px.

## Elevation & Depth

Depth is subtle. The measured shadows are a medium drop (`rgba(28, 39, 53, 0.25) 0px 10px 24px`) on floating items and a wide soft glow (`rgba(0, 0, 0, 0.1) 1px 1px 20px`) on cards and the sub-navigation panel. Illustration panels derive depth from their gradient fills and white inner cards, not from outlines.

## Shapes

The radius scale is `{rounded.xs}` 4px, `{rounded.sm}` 6px, `{rounded.md}` 8px, `{rounded.lg}` 16px, `{rounded.xl}` 24px, `{rounded.2xl}` 28px, `{rounded.3xl}` 40px, `{rounded.4xl}` 80px and `{rounded.pill}`. The page publishes the same ladder as radius units (4px, 8px, 12px, 16px, 24px, 40px and 80px) in its `--rg-radius-unit-*` variables. Buttons measure 40px and the grey feature cards 24px.

## Components

**button-primary** — `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button}`, `{rounded.3xl}`, padding 10px 26px, height 44px. The header "Create account", "Deploy an app" and the "Yes" and "No" prompt buttons measured the same style.

**button-secondary** — white fill, `{colors.primary}` text and outline, same geometry ("Try a hands-on tutorial", "Create an AWS account" measured as white fill with dark text).

**nav-link** — 14px, `{colors.ink}`, `{rounded.md}`, padding 8px 16px. **utility-link** — the white links on the dark top bar.

**card** — `{colors.page-largest}` fill, `{rounded.xl}`, padding 28px 28px 20px, with a title in `{typography.subheading}`-like weight.

**footer** — `{colors.surface-footer}` with `{colors.ink-inverted}` text.

## Design System Architecture

The AWS Amplify product has an official component library, **Amplify UI**, documented at [ui.docs.amplify.aws](https://ui.docs.amplify.aws): "a collection of accessible, themeable, performant React (and more) components that can connect directly to the cloud", with more than 40 components (base, feedback, navigation, inputs, layout, data display) plus connected components (Authenticator, Storage, File Uploader, Face Liveness). Its source is [github.com/aws-amplify/amplify-ui](https://github.com/aws-amplify/amplify-ui), Apache-2.0, with `@aws-amplify/ui-react`, `ui-vue` and `ui-angular` packages. Theming is token-based ([ui.docs.amplify.aws/react/theming](https://ui.docs.amplify.aws/react/theming)): namespaces such as `colors`, `fonts` and `space`, compiled to `--amplify-*` CSS variables named like `--amplify-component-[name]-[modifier]-[_state]-[child]`, with `createTheme` and dark-mode overrides. The Button page ([ui.docs.amplify.aws/react/components/button](https://ui.docs.amplify.aws/react/components/button)) lists variations (default, primary, link, menu, warning, destructive), sizes (small, default, large) and colour themes (error, info, warning, success, overlay).

I measured that Button page: buttons are 42px tall, 16px weight 700, radius 4px, padding 8px 16px, set in Inter, with a teal primary (#047d95) and a blue-violet (#406abf) variant. This is a different look from the marketing page, which is built from the AWS site's own token layer: 337 CSS variables prefixed `--rg-` (colour roles such as `--rg-color-text-primary`, radius units, shadow gradients and margins) and Amazon Ember. The Amplify UI library is therefore the real design system for Amplify-built applications, but it is not what renders the product page; this file's tokens come from the page's `--rg-*` layer.

## Do's and Don'ts

- Do use dark pill buttons with outlined twins on marketing pages; keep the radius at 40px.
- Do keep headings at weight 500 and sizes within 24–32px.
- Do pair each paragraph with one underlined blue link.
- Do tint illustration panels with gradient pastels.
- Don't use the Amplify UI teal or 4px radius on marketing pages.
- Don't mix Inter (docs and library) with Amazon Ember (marketing).
- Don't add colour outside gradients, links and status states.

## Responsive Behavior

At the 390px phone viewport the headline measured 28px (`{typography.display-mobile}`, weight 500, line-height about 36px) in place of 32px. The behaviour of the sub-navigation, the two-column rows and the illustration panels at narrow widths was not captured, so it is not specified here.

## Iteration Guide

1. Start from white `{colors.canvas}`; use `{colors.page-largest}` for cards.
2. Make every primary action a `{rounded.3xl}` pill in `{colors.primary}`, paired with an outlined secondary.
3. Keep type in Amazon Ember (or Helvetica Neue) at 14, 16, 24 and 32px.
4. Add colour only through gradient tints and `{colors.link-blue}` links.
5. For app UI, switch to Amplify UI tokens from ui.docs.amplify.aws.
