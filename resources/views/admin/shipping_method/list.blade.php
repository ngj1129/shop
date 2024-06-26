<x-wire-table>
    {{-- 테이블 제목 --}}
    <x-wire-thead>
        <th width='100'>Id</th>
        <th width='100'>name</th>
        <th width='100'>price</th>
        <th width='100'>priod</th>
        <th width='100'>manager_name</th>
        <th width='100'>manager_phone</th>
        <th width='100'>depature</th>
        <th width='100'>arrive</th>
        <th width='100'>cost</th>
        <th width='100'>country</th>
    </x-wire-thead>
    <tbody>
        @if(!empty($rows))
            @foreach ($rows as $item)
            {{-- 테이블 리스트 --}}
            <x-wire-tbody-item :selected="$selected" :item="$item">
                <td >
                    <x-click wire:click="edit({{$item->id}})">
                        {{$item->id}}
                    </x-click>
                </td>

                <td width='100'>{{$item->name}}</td>
                <td width='100'>{{$item->price}}</td>
                <td width='100'>{{$item->priod}}</td>
                <td width='200'>{{$item->manager_name}}</td>
                <td width='200'>{{$item->manager_phone}}</td>
                <td width='200'>{{$item->depature}}</td>
                <td width='200'>{{$item->arrive}}</td>
                <td width='200'>{{$item->cost}}</td>
                <td width='200'>{{$item->country}}</td>
            </x-wire-tbody-item>
            @endforeach
        @endif
    </tbody>
</x-wire-table>
