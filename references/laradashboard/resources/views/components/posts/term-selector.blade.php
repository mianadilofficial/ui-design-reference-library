@props([
    'name',
    'taxonomyModel',
    'term' => null,
    'parentTerms' => [],
    'placeholder' => __('Select'),
    'label' => null,
    'searchable' => true,
])

@php
    // Create a recursive function that references itself and handles different term types
    $buildOptions = function($terms, $parentId = null, $depth = 0, $currentTermId = null) use (&$buildOptions) {
        $options = [];
        foreach ($terms as $term) {
            // Check if $term is an object or an array with parent_id property/key
            $termParentId = null;
            if (is_object($term)) {
                $termParentId = $term->parent_id;
                $termId = $term->id;
                $termName = $term->name;
            } elseif (is_array($term)) {
                $termParentId = $term['parent_id'] ?? null;
                $termId = $term['id'] ?? null;
                $termName = $term['name'] ?? '';
            } else {
                // Skip this item if it's neither an object nor an array
                continue;
            }
            
            if ($termParentId == $parentId && (!$currentTermId || $termId !== $currentTermId)) {
                $indent = str_repeat('— ', $depth);
                $options[] = [
                    'value' => $termId,
                    'label' => $indent . $termName
                ];
                
                $childOptions = $buildOptions($terms, $termId, $depth + 1, $currentTermId);
                $options = array_merge($options, $childOptions);
            }
        }
        return $options;
    };
    
    $parentOptions = [];
    
    // Handle different parentTerms formats
    if (is_array($parentTerms) || $parentTerms instanceof \Traversable) {
        $hierarchicalOptions = $buildOptions($parentTerms, null, 0, $term ? $term->id : null);
        $parentOptions = array_merge($parentOptions, $hierarchicalOptions);
    }
@endphp

<x-inputs.combobox 
    :name="$name"
    :label="$label"
    :placeholder="$placeholder"
    :options="$parentOptions"
    :searchable="$searchable"
    x-model="formData.{{ $name }}"
/>