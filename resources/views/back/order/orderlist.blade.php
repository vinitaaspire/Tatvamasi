 @foreach ($orders as $key => $list)
                      <tr>
                        <td>{{ $key+1    }} </td>
                         <td> #T00{{ $list->id }}</td>
                        <td>{{ $list->course?->name  }}</td>
                        <td>{{ $list->price ?? ''}} </td>
                        <td>{{ $list->duration ?? '' }}</td>
                        
                        <td>
                            <select name="payment" class="form-control">
                                <option @if($list->payment_status == 1) selected @endif value="1">Success</option>
                                <option @if($list->payment_status == 0) selected @endif value="0">Failed</option>
                                <option @if($list->payment_status != 0 && $list->payment_status != 1) selected @endif value="">Select Payment Status</option>
                            </select>
                        </td>
                        <td>{{ $list->created_at->format('d M y - h:i A') }}</td>
                      <td>
    <button type="button" class="btn btn-primary view" data-id="{{ $list->id ?? '' }}">View</button>
</td>

                      </tr>
                      @endforeach