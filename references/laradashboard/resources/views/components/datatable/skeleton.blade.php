@props([
    'columns' => 5,
    'rows' => 8,
    'enableCheckbox' => true,
    'enablePagination' => true
])

<div class="table-responsive">
    <table class="table">
        <thead class="table-thead">
            <tr class="table-tr">
                @if($enableCheckbox)
                <th width="3%" class="table-thead-th py-4"><div class="flex items-center"><div class="h-4 w-4 bg-gray-300 dark:bg-gray-700 rounded"></div></div></th>
                @endif
                @foreach(range(1, $columns) as $column)
                    <th class="table-thead-th py-4">
                        <div class="flex items-center">
                            <div class="h-4 w-24 bg-gray-300 dark:bg-gray-700 rounded mb-1"></div>
                        </div>
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody class="table-tbody">
            @foreach(range(1, $rows) as $row)
                <tr class="bg-white dark:bg-gray-900 table-tr">
                    @if($enableCheckbox)
                    <td class="animate-pulse table-td table-td-checkbox">
                        <div class="h-4 w-4 bg-gray-300 dark:bg-gray-700 rounded"></div>
                    </td>
                    @endif

                    @foreach(range(1, $columns) as $column)
                        <td class="animate-pulse table-td">
                            <div class="h-4 w-24 bg-gray-300 dark:bg-gray-700 rounded mb-1"></div>
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>

    @if($enablePagination ?? true)
        <div class="my-4 px-4 sm:px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <div class="w-20 h-4 bg-gray-300 dark:bg-gray-700 rounded"></div>
                <div class="w-16 h-8 bg-gray-300 dark:bg-gray-700 rounded"></div>
            </div>
            <div class="pagination-links">
                <!-- show 5 box items -->
                @foreach(range(1, 5) as $item)
                    <div class="w-6 h-6 bg-gray-300 dark:bg-gray-700 rounded inline-block mx-1"></div>
                @endforeach
            </div>
        </div>
    @endif
</div>
