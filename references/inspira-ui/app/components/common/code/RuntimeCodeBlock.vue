<script setup lang="ts">
interface Props {
  code: string;
  filename?: string;
  label?: string;
  icon?: string;
  language?: string;
  hideHeader?: boolean;
}

interface RuntimeToken {
  content: string;
  color?: string;
  fontStyle?: number;
}

const props = withDefaults(defineProps<Props>(), {
  filename: undefined,
  label: undefined,
  icon: undefined,
  language: "text",
  hideHeader: false,
});

const colorMode = useColorMode();
const lines = shallowRef<RuntimeToken[][]>([]);
const isHighlighted = ref(false);
let highlightRun = 0;

const language = computed(() => normalizeLanguage(props.language || props.filename));
const preClass = computed(() => `language-${language.value} shiki`);

watch(
  () => [props.code, language.value, colorMode.value] as const,
  async () => {
    const run = ++highlightRun;
    isHighlighted.value = false;

    try {
      const { codeToTokens } = await import("shiki");
      const theme = colorMode.value === "light" ? "material-theme-lighter" : "material-theme-palenight";
      const result = await codeToTokens(props.code, {
        lang: language.value,
        theme,
      });

      if (run === highlightRun) {
        lines.value = result.tokens;
        isHighlighted.value = true;
      }
    } catch {
      if (run === highlightRun) {
        lines.value = toPlainTokens(props.code);
        isHighlighted.value = true;
      }
    }
  },
  { immediate: true },
);

function normalizeLanguage(value?: string) {
  const input = value?.split(".").at(-1)?.toLowerCase() || "text";

  if (input === "vue") return "vue";
  if (input === "ts") return "typescript";
  if (input === "js" || input === "mjs" || input === "cjs") return "javascript";
  if (input === "sh" || input === "shell" || input === "zsh") return "bash";
  if (input === "json" || input === "css" || input === "bash" || input === "diff") return input;

  return "text";
}

function toPlainTokens(code: string) {
  return code.split("\n").map((line) => [{ content: line }]);
}

function tokenStyle(token: RuntimeToken) {
  const fontStyle = token.fontStyle || 0;

  return {
    color: token.color,
    fontStyle: fontStyle & 1 ? "italic" : undefined,
    fontWeight: fontStyle & 2 ? "700" : undefined,
    textDecoration: fontStyle & 4 ? "underline" : undefined,
  };
}
</script>

<template>
  <ProsePre
    :code="code"
    :filename="filename"
    :icon="icon"
    :language="language"
    :hide-header="hideHeader"
    :class="preClass"
  >
    <code v-if="isHighlighted">
      <span
        v-for="(line, lineIndex) in lines"
        :key="lineIndex"
        class="line"
      ><template v-if="line.length"><span
        v-for="(token, tokenIndex) in line"
        :key="`${lineIndex}-${tokenIndex}`"
        :style="tokenStyle(token)"
      >{{ token.content }}</span></template><span
        v-else
        aria-hidden="true"
      >&nbsp;</span></span>
    </code>
    <code v-else>{{ code }}</code>
  </ProsePre>
</template>
