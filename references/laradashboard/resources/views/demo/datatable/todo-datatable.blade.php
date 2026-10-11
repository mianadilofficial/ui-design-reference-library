<pre><code>declare(strict_types=1);<br>

namespace App\Livewire\Datatable;<br>

use App\Models\Todo;<br>

class TodoDatatable extends Datatable<br>
{<br>
    public string $model = Todo::class;<br>
}<br>
</code></pre>
<br>
<pre><code>@@livewire('datatable.todo-datatable', ['lazy' => true])</code></pre>
