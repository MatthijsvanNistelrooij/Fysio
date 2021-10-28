<div class="modal-dialog modal-dialog modal-xl" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Overzicht Consulten:</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mb-3" style="max-height: 600px; overflow: scroll">
            @if($dogs->consults->count() > 0)

            <table class="table">
                <tbody>
                    @foreach ($dogs->consults as $consult )
                  <tr class="overzicht">
                    <td style=" border: none; width: 5%">
                        <a href="/consults/rapport/{{$consult->id}}">
                            <i class="fas fa-file mr-2" style="color: rgb(95, 95, 95);"></i>
                        </a>
                    </td>
                    <td style=" border: none; width: 40%">
                        {{ $consult->updated_at->format('d-m-Y') }}  - {{ $consult->con2 }}

                    </td>
                    <td style=" border: none; width: 50%">
                        <i class="{{ $consult->con3}} ml-2" style="color: orange; font-size: 10px"></i>
                        <i class="{{ $consult->con8}} ml-2" style="color: rgb(0, 255, 21); font-size: 10px"></i>
                        <i class="{{ $consult->con9}} ml-2" style="color: rgb(0, 60, 255); font-size: 10px"></i>
                        <i class="{{ $consult->con10}} ml-2" style="color: rgb(238, 255, 0); font-size: 10px"></i>
                        <i class="{{ $consult->con11}} ml-2" style="color: rgb(225, 0, 255); font-size: 10px"></i>
                        <i class="{{ $consult->con12}} ml-2" style="color: rgb(255, 0, 76); font-size: 10px"></i>
                        <i class="{{ $consult->con13}} ml-2" style="color: rgb(0, 255, 242); font-size: 10px"></i>
                        <i class="{{ $consult->con14}} ml-2" style="color: rgb(0, 141, 0); font-size: 10px"></i>
                    </td>
                    <td style=" border: none; width: 5%">
                        <a data-dismiss="modal"  data-toggle="modal"  data-target="#exampleModal302" style="cursor: pointer">
                            <i class="fas fa-trash" style="color: red"></i>
                        </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              @else
                <p style="text-align: center; margin-top: 2%">
                    Er zijn nog geen consulten.
                </p>
                @endif
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" style="color: white" data-dismiss="modal" aria-label="Close">
                <i class="fas fa-check"></i>
                Sluiten
            </button>
        </form>
    </div>
</div>
</div>
