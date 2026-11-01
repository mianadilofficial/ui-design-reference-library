---
version: alpha
name: VK Mail.ru
category: "Design Systems"
description: "The Mail.ru portal is a dense Russian-language news-and-services page on a white canvas with graphite ink #2c2d2e, a vivid VK blue #0077ff for the login and search buttons, blue #0070f0 headline links, soft grey #87898f meta text, 20px-radius feed cards with a faint blue shadow, and the VK Sans Display / MailSans / Arial type stack."
colors:
  canvas: "#ffffff"
  ink: "#2c2d2e"
  primary: "#0077ff"
  on-primary: "#ffffff"
  primary-hover: "#0073f7"
  ink-secondary: "#87898f"
  ink-link: "#0070f0"
  ink-green: "#087c6d"
  ink-disabled: "#aaadb3"
  surface-dark: "#202020"
  surface-darker: "#080808"
  hairline: "#00103d1f"
  docs-accent: "#2688eb"
typography:
  display:
    fontFamily: VKSansDisplay, MailSans, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: VKSansDisplay, MailSans, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: VKSansDisplay, MailSans, Helvetica, Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 20px
  body-dominant:
    fontFamily: arial
    fontSize: 15px
    fontWeight: 400
  button-search:
    fontFamily: VKSansDisplay, MailSans, Helvetica, Arial, sans-serif
    fontSize: 17px
    fontWeight: 500
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 20px
  4xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 3.5px
  s4: 4px
  s5: 6px
  s6: 7.5px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-search:
    backgroundColor: "{colors.primary}"
    typography: "{typography.button-search}"
    padding: 8px 10px 8px 8px
    height: 40px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 36px
  button-docs-primary:
    backgroundColor: "{colors.docs-accent}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.3xl}"
    padding: 8px 16px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 16, 61, 0.06) 0px 6px 20px 0px
---

## Overview

Mail.ru's homepage is a portal, not a landing page. The capture shows an app-like three-zone layout on a white canvas. The top bar carries the blue "@mail" logo, a row of product links (Почта, Облако, OK, VK, Новости, Знакомства, Мой Мир, Игры, a "Все проекты" dropdown) and at the right a blue text link "Регистрация", a filled blue "Войти" button and a settings gear. Below it, the left rail stacks a login card (a filled blue "Войти" button above an outlined "Создать почту" button), an advertisement card with a landscape photograph, a horoscope tile, a calendar tile (today's date in a blue square with a week strip) and a second ad card with a 3D blue illustration. The center column starts with a wide search field whose border is blue, with a camera icon and a blue "Найти" (Find) button attached at the right end, followed by currency rates (USD, EUR and CNY with red down arrows) and a TV-guide link, a sponsored banner, a tab row of news categories where the active "Новости" tab sits in a pale-blue pill, and a long list of blue news headlines. A weather card (Bangkok, +30°) sits to the right of the headlines, and a mint-green tooltip asks the visitor to set their location with two white buttons ("Определить", "Изменить вручную").

Below the news list, a "Дзен / Новости" feed switcher introduces a two-column grid of large cards. Each card has a big photograph on top (faces, cars, drones, phones) and, below it, a small round source avatar with the publication name and read count, a bold two-line headline and a grey excerpt that fades out. Ads in the feed are labeled "Реклама". The photographs are editorial and emotive, often close-up portraits, and the feed density is high: dozens of text items are visible without scrolling.

Language is Russian and the tone is that of a news wire: short factual headlines, no marketing slogans. Interface microcopy is utilitarian ("Определить", "Изменить вручную", "Перейти").

## Colors

- **Canvas #ffffff** is the page and card background; the portal avoids pure white and black wherever it can, according to the design system, but white remains the base surface.
- **Ink #2c2d2e** is a graphite near-black used for most reading text, as the system guidance prefers a grey and graphite range over pure black.
- **Primary #0077ff** is the VK blue on the "Войти" and "Найти" buttons and logo; **primary-hover #0073f7** is its hover state.
- **Ink-link #0070f0** is the slightly deeper blue used for the news headline list; **ink-secondary #87898f** is the grey for meta text such as read counts and times; **ink-disabled #aaadb3** is a lighter grey.
- **Ink-green #087c6d** is a deep teal-green measured as a text color; the capture does not show where it is used.
- **Surface-dark #202020** and **surface-darker #080808** are dark backgrounds measured on the page, the kind used by dark-themed elements; the capture does not show a dark section.
- **Hairline #00103d1f** is a translucent navy used for borders and the subtle outlines around cards and inputs.
- **Docs-accent #2688eb** comes from the VKUI component documentation, where the default "vkBase" theme uses it for the primary button.

The Paradigm documentation says the main palette is built around a neutral range, the main VK blue and an accent green, that the accent green should occupy no more than 40 percent of an external-communications palette and is not used without the blue, and that interior product palettes should keep accents below 30 percent.

## Typography

The measured stack is **VKSansDisplay** (VK Sans Display) then **MailSans**, Helvetica, Arial and a generic sans-serif, with Arial the single most-used family by characters because long text falls back to it. Display text (such as the large weather figure) is 28px at weight 500 with a 36px line height. UI and navigation text is 15px at weight 500 with a 20px line height; running links are 15px at weight 400; and the search button label is 17px at weight 500. The Paradigm Typography page confirms VK Sans Display as the corporate typeface and recommends it for headlines, promo elements and navigation, with system fonts as companions: Helvetica Neue on macOS, Arial on Windows, San Francisco on iOS, Inter on Android and Roboto as a native option. It suggests pairs such as VK Sans Display (Medium or Demibold) with Inter Regular, recommends left alignment, and advises against uppercase except in tags.

VK Sans Display is a corporate typeface; the declared fallbacks are MailSans, Helvetica, Arial.

## Layout

The page is a fixed-width multi-column application layout rather than a centered marketing column: a narrow left rail (about a quarter of the width) holds personal and ad cards, and a wide center area holds search, news and feed. Spacing is fine-grained with a 2px to 14px scale (2px, 3px, 3.5px, 4px, 6px, 7.5px, 8px, 10px, 12px, 14px), reflecting a very compact UI, with 8px and 16px used for padding on buttons. Cards in the left rail have a visible gutter between them; feed cards sit in two columns with a small gutter, and each card is a self-contained unit with a 20px radius. The Paradigm site also publishes sections on layout and grid, and says layout standardizes the main components and sets one visual rhythm.

## Elevation & Depth

Depth is soft and low. Cards use a faint navy-tinted shadow (rgba(0, 16, 61, 0.06) at 0 6px 20px) and, in several places, simply a 1px translucent border (#00103d1f). The mint tooltip and the weather card are flat on the page. The Paradigm visual-language page describes a layer concept for shadows ("the lower an object sits, the less intense its shadow") and for dark theme ("the higher an object sits, the lighter it is"), which fits the restrained shadow seen here.

## Shapes

Radii are generous on containers and moderate on controls. Feed and rail cards use a 20px radius (with 20px on the top corners only for image-topped cards); buttons use 8px; the search button is rounded only on its outer right side; chips and small elements use 12px, 10px or 6px; circular avatars use 50%; and a 100px value is used for pill-shaped tabs such as the active news category. This mix of 8px controls inside 20px cards is the signature shape pairing.

## Components

- **button-primary**: VK blue #0077ff, white label (the "Войти" buttons), 15px weight 500, 8px 16px padding, 36px height, 8px radius.
- **button-search**: the "Найти" button attached to the search field: blue, 17px weight 500, 8px 10px 8px 8px padding, 40px height, square on the inside edge.
- **button-outline**: white fill, graphite label and a light border, used for "Создать почту", "Определить" and "Изменить вручную", 36px height and 8px radius.
- **button-docs-primary**: from the VKUI Button documentation page measured with the extractor, #2688eb with a white label, 8px radius; sizes measured at 28px, 32px and 36px tall.
- **nav-link**: graphite 15px medium text with an 8px 16px padding and a pill radius when active.
- **card**: white, 12px radius for compact tiles (20px for large feed cards), graphite text and the faint blue shadow.
- **link**: 15px regular graphite, with news headline links colored #0070f0.

## Design System Architecture

Mail's design system is called **Paradigm** and lives at [paradigm.mail.ru](https://paradigm.mail.ru/). The URL assigned in the queue, [design.mail.ru](https://design.mail.ru/), is the design team's landing page ("Дизайн в Mail.ru"): it presents the team's projects and events and links to Paradigm under "Дизайн-система", so it is real Mail.ru design material but not the design-system documentation itself; the system content below comes from Paradigm. The Paradigm home page describes it as "the design system of Mail products", which helps keep the user experience consistent and optimize design and development resources, and splits its guidance into audiences: for designers (visual language, typography, palette, working in Figma), for managers (brand, logos and icons, editorial policy) and for developers (tokens, VKUI icons, VKUI components). Its changelog lists "Paradigm 3" on 1 September 2025 with a redesign, new navigation and a dark theme.

The [Components page](https://paradigm.mail.ru/components/) states that Paradigm currently runs on VKUI components, and the [Design tokens page](https://paradigm.mail.ru/design_tokens/) says tokens come from the open VKUI Tokens repository, are written in TypeScript, ship as one npm package, can be exported to scss, less or CSS-in-JS, support light and dark themes (with dark tokens tinting the base theme's color tokens), allow per-product themes such as productivity and media that inherit a base theme, and are responsive, with variables that change by viewport. The [Palette page](https://paradigm.mail.ru/branding/palette/) groups color tokens as Text, Icon, Background, Stroke and Palette, aligned with VKUI names, and states AA contrast goals. The [visual language page](https://paradigm.mail.ru/branding/style/) lists layout, typography, palette, iconography, effects, theming and accessibility. The component library is documented at [vkui.io](https://vkui.io/components/button/), where the Button has modes primary, secondary, outline, tertiary and link, and appearances such as accent and accent-invariable.

## Do's and Don'ts

Do use VK blue (#0077ff) for the single main action in a view, and graphite (#2c2d2e) instead of pure black for text. Do use 8px radii on controls and 20px on cards. Do keep dense layouts, with small meta text in #87898f. Do label advertising clearly and keep photographs editorial.

Don't use pure black or pure white as accent fields, since the system steers toward grey and graphite neutrals. Don't use the accent green without the blue, and don't exceed the stated share for accents. Don't set headlines in all capitals, which the typography guidance advises against outside tags. Don't mix the VKUI documentation blue (#2688eb) into Mail interfaces, which use #0077ff. Don't justify text; left alignment is the recommendation.

## Responsive Behavior

Paradigm states that its tokens are built with adaptivity in mind: some variables and classes take different values at different viewports, which moves part of responsive behavior into the token layer. The homepage was captured on a desktop width only, and nothing about its narrow-screen layout was measured, so no claim is made about how the three zones collapse. Type scale and button heights are the tokens to preserve: 15px text on a 20px line, and 36px buttons. Keep 8px control radii at every size.

## Iteration Guide

1. Start from canvas #ffffff, graphite ink #2c2d2e and 15px text on a 20px line in VK Sans Display, falling back to MailSans, Helvetica or Arial.
2. Use #0077ff for the main button (36px tall, 8px radius, 15px weight 500) and for brand moments; use #0070f0 for headline links.
3. Build cards with a 20px radius, the faint #00103d1f outline and the soft blue shadow.
4. Show meta text in #87898f, and keep feed items as photo on top, bold headline, grey excerpt.
5. For component work, install VKUI and its tokens and confirm the theme (the docs default is #2688eb, Mail uses #0077ff).
