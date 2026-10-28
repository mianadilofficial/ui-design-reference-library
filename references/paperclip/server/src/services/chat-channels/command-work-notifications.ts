import type { ChatProvider, ToolConnectionTransport } from "@paperclipai/shared";
import { notifyDiscordCommandRegistration } from "./discord/command-work-notifications.js";

export async function notifyChatCommandRegistration(transaction: object, endpoint: { id: string; provider: ChatProvider }) {
  if (endpoint.provider === "discord") {
    await notifyDiscordCommandRegistration(transaction, { kind: "endpoint", id: endpoint.id });
  }
}

export async function notifyChatConnectionCommandRegistration(transaction: object, connectionId: string, transport: ToolConnectionTransport = "chat_sdk") {
  if (transport === "chat_sdk") {
    await notifyDiscordCommandRegistration(transaction, { kind: "connection", id: connectionId });
  }
}

export async function notifyChatCompanyCommandRegistration(transaction: object, companyId: string) {
  await notifyDiscordCommandRegistration(transaction, { kind: "company", id: companyId });
}
