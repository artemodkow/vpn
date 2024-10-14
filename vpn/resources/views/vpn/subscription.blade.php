@extends('dashboard')

@section('content')
<div class="subscription-cart" id="order">
    <div class="subscription-cart-title">
        Подписка на VPN Premium
    </div>
    <div class="subscription-cart__container">
        <!-- Убираем action="route('payment')" -->
        <form method="POST">
            @csrf
            <div class="subscription-cart__container-column subscription-cart__container--left">
                <div class="subscription-cart__step subscription-cart__step--current">
                    <div class="subscription-cart__step-title">
                        <svg class="icon step">
                            <use xlink:href="{{ asset('/dist/img/sprite.svg#step1') }}"></use>
                        </svg>
                        Выберите тарифный план
                    </div>
                    <div class="subscription-cart__step-choose-plan">
                        <label>
                            <div class="subscription-cart__step-choose-plan-item">
                                <input type="radio" name="plan" value="1_month" required>
                                <span>1 месяц </span>
                                <div class="subscription-cart__step-choose-plan-item-price"> 199.00 ₽</div>
                                <span class="tag trial">🎁 10 дней бесплатно</span>
                            </div>
                        </label>
                        <label>
                            <div class="subscription-cart__step-choose-plan-item">
                                <input type="radio" name="plan" value="3_months">
                                <span>3 месяца</span>
                                <div class="subscription-cart__step-choose-plan-item-price">499.00 ₽ (166 ₽ / 1 мес.)</div>
                                <span class="tag trial">🎁 10 дней бесплатно</span>
                            </div>
                        </label>
                        <label>
                            <div class="subscription-cart__step-choose-plan-item">
                                <input type="radio" name="plan" value="6_months">
                                <span>6 месяцев</span>
                                <div class="subscription-cart__step-choose-plan-item-price">899.00 ₽ (150 ₽ / 1 мес.)</div>
                                <span class="tag trial">🎁 10 дней бесплатно</span>
                            </div>
                        </label>
                        <label>
                            <div class="subscription-cart__step-choose-plan-item">
                                <input type="radio" name="plan" value="1_year">
                                <span>12 месяцев</span>
                                <div class="subscription-cart__step-choose-plan-item-price">1599.00 ₽ (133 ₽ / 1 мес.)</div>
                                <span class="tag trial">🎁 10 дней бесплатно</span>
                            </div>
                        </label>
                    </div>
                    <div class="subscription-cart__step-actions">
                        <button type="submit" class="button black-button">Продолжить &gt;</button>
                    </div>
                </div>
                <div class="subscription-cart__step">
                    <div class="subscription-cart__step-title">
                        Введите промокод
                    </div>
                    <div class="subscription-cart__step-actions subscription-cart__step-actions--promo">
                        <div class="input-wrap">
                            <input type="text" class="input" name="promo_code" placeholder="Промо код">
                            <svg class="icon check">
                                <use xlink:href="{{ asset('/dist/img/sprite.svg#check') }}"></use>
                            </svg>
                        </div>
                        <button type="button" class="button black-button apply-promo">Применить</button>
                    </div>
                </div>
            </div>

            <div class="subscription-cart__container-column subscription-cart__container--right">
                <div class="subscription-cart__step subscription-cart__step--first subscription-cart__step--current">
                    <div class="subscription-cart__step-title">Ваш заказ</div>
                    <div class="subscription-cart__step-subtotal">
                        <div class="subscription-cart__step-subtotal-item">
                            <div class="subscription-cart__step-subtotal-regdata-item">
                                <span>Пользователь</span><span>{{ auth()->user()->name }}</span>
                            </div>
                        </div>
                        <div class="subscription-cart__step-subtotal-item">
                            <div class="subscription-cart__step-subtotal-item-title">
                                <!--<svg class="icon logo">
                                    <use xlink:href="{{ asset('/dist/img/sprite.svg#logo') }}"></use>
                                </svg> -->
                                Подписка на VPN Premium
                            </div>
                            <div class="subscription-cart__step-subtotal-item-price">
                                <div class="subscription-cart__step-subtotal-item-price-row">
                                    <span class="price-name">Сейчас</span> <span class="amount">0₽</span>
                                </div>
                                <div class="subscription-cart__step-subtotal-item-price-row">
                                    <span class="price-name">Затем ежемесячно</span>
                                    <span class="amount" id="plan-price">199.00₽</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subscription-cart__step-note">
                        Нажимая на кнопку, вы соглашаетесь с
                        <a target="_blank" href="{{ url('/policy') }}">политикой конфиденциальности</a> и
                        <a target="_blank" href="{{ url('/terms-of-service') }}">обработкой персональных данных</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
