<div class="flex flex-col md:flex-row justify-between gap-4">
    <x-inputs.password
        name="password"
        label="Password"
        :autogenerate="true"
        placeholder="Enter password"
        hint="Choose a strong password."
        required
    />
    <x-inputs.password
        name="confirm_password"
        label="Confirm Password"
        :autogenerate="true"
        placeholder="Re-enter password"
        required
    />
</div>
