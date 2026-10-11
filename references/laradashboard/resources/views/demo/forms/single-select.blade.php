<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <x-inputs.combobox
        name="city"
        label="City (Select without search - key:value pair)"
        :options="[
            'dhaka' => 'Dhaka',
            'ny' => 'New York',
            'london' => 'London'
        ]"
        placeholder="Select city"
        hint="Type to search city."
        :searchable="false"
    />
    <x-inputs.combobox
        name="city"
        label="City (Select with search - label:value pair)"
        :options="[
            ['value' => 'dhaka', 'label' => 'Dhaka'],
            ['value' => 'ny', 'label' => 'New York'],
            ['value' => 'london', 'label' => 'London']
        ]"
        placeholder="Select city"
        hint="Type to search city."
        :searchable="true"
    />
</div>
