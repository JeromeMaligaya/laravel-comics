<footer id="main-footer">
    <div id="footer-links">
        <div class="container">
            @foreach ($footerListLinks as $item)
            <div class="card-footer">
                    <h3>{{ $item['title'] }}</h3>
                    <ul>
                        @foreach ($item['items'] as $link)
                            <li>
                                <a href="#">{{ $link['name'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
        </div>
    </div>
</footer>
