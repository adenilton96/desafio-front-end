<div class="div-input">
    <input name="{{ $name }}" id="{{ $id }}" autocomplete="off" required />
    <label for="{{ $id }}">
        <span>{{ $label }}</span>
    </label>
</div>

<style scoped>
    .div-input {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    input {
        color: #6f6f6f;
        font-size: 19px;
        width: 100%;
        padding: 20px 5px 5px;
        background-color: #fff;
        border: none;
        outline: 0;
        border-bottom: 1px solid #6f6f6f;
        margin-bottom: 16px
    }

    label {
        color: #6f6f6f;
        ;
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    span {
        position: absolute;
        bottom: 11px;
        left: 5px;
        font-size: 19px;
        transition: all 0.3s ease;
    }

    input:focus+label span,
    input:valid+label span {
        transform: translateY(-150%);
        font-size: 14px;
        color: #6f6f6f;
    }
</style>
