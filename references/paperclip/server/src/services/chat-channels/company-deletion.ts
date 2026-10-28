import { chatEndpoints } from "@paperclipai/db";
import { eq } from "drizzle-orm";
import type { CompanyDeletionParticipant } from "../../lib/company-deletion.js";

export const chatCompanyDeletion: CompanyDeletionParticipant = {
  async deleteCompanyData(tx, companyId) {
    await tx.delete(chatEndpoints).where(eq(chatEndpoints.companyId, companyId));
  },
};
