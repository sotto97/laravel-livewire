<div>
    <h2>{{ $count }}</h2>
    <p><button wire:click="inc">+1</button></p>
    <input type="text" wire:model.lazy="message">{{ $message }}
    @if(!$message)
    <p style="color:red;font-weight:bold">文字を入力してください。</p>
    @else
    <p>文字を入力しました。</p>
    @endif
</div>