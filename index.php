<html>
    <title></title>
    <head>
        <style type="text/css">

            .multilevel-accordion-menu .is-accordion-submenu-parent a {
                background: #4d5158;
            }

            .multilevel-accordion-menu .is-accordion-submenu a {
                background: #35383d;
            }

            .multilevel-accordion-menu .sublevel-1 {
                text-indent: 1rem;
            }

            .multilevel-accordion-menu .sublevel-2 {
                text-indent: 2rem;
            }

            .multilevel-accordion-menu .sublevel-3 {
                text-indent: 3rem;
            }

            .multilevel-accordion-menu .sublevel-4 {
                text-indent: 4rem;
            }

            .multilevel-accordion-menu .sublevel-5 {
                text-indent: 5rem;
            }

            .multilevel-accordion-menu .sublevel-6 {
                text-indent: 6rem;
            }

            .multilevel-accordion-menu a {
                color: #fefefe;
                box-shadow: inset 0 -1px #41444a;
            }

            .multilevel-accordion-menu a::after {
                border-color: #fefefe transparent transparent;
            }

            .multilevel-accordion-menu .menu > li:not(.menu-text) > a {
                padding: 1.2rem 1rem;
            }

            .multilevel-accordion-menu .is-accordion-submenu-parent[aria-expanded="true"] a.subitem::before {
                content: "\f016";
                font-family: FontAwesome;
                margin-right: 1rem;
            }

            .multilevel-accordion-menu .is-accordion-submenu-parent[aria-expanded="true"] a::before {
                content: "\f07c";
                font-family: FontAwesome;
                margin-right: 1rem;
            }

            .multilevel-accordion-menu .is-accordion-submenu-parent[aria-expanded="false"] a::before {
                content: "\f07b";
                font-family: FontAwesome;
                margin-right: 1rem;
            }
        </style>
    </head>
</html>
<body>
    <ul class="multilevel-accordion-menu vertical menu" data-accordion-menu>
        <li>
            <a href="#">Item 1</a>
            <ul class="menu vertical sublevel-1">
                <li>
                    <a href="#">Sub-item 1</a>
                    <ul class="menu vertical sublevel-2">
                        <li><a class="subitem" href="#">Thing 1</a></li>
                        <li><a class="subitem" href="#">Thing 2</a></li>
                        <li><a class="subitem" href="#">Thing 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Sub-item 2</a>
                    <ul class="menu vertical sublevel-2">
                        <li>
                            <a href="#">Super-sub-item 1</a>
                            <ul class="menu vertical sublevel-3">
                                <li><a class="subitem" href="#">Thing 1</a></li>
                                <li><a class="subitem" href="#">Thing 2</a></li>
                            </ul>
                        </li>
                        <li><a class="subitem" href="#">Thing 2</a></li>
                    </ul>
                </li>
                <li><a class="subitem" href="#">Thing 1</a></li>
                <li><a class="subitem" href="#">Thing 2</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Item 2</a>
            <ul class="menu vertical sublevel-1">
                <li><a class="subitem" href="#">Thing 1</a></li>
                <li><a class="subitem" href="#">Thing 2</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Item 3</a>
            <ul class="menu vertical sublevel-1">
                <li><a class="subitem" href="#">Thing 1</a></li>
                <li><a class="subitem" href="#">Thing 2</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Item 4</a>
            <ul class="menu vertical sublevel-1">
                <li>
                    <a href="#">Sub-item 3</a>
                    <ul class="menu vertical sublevel-2">
                        <li><a class="subitem" href="#">Thing 1</a></li>
                        <li><a class="subitem" href="#">Thing 2</a></li>
                    </ul>
                </li>
                <li><a class="subitem" href="#">Thing 1</a></li>
                <li><a class="subitem" href="#">Thing 2</a></li>
            </ul>
        </li>
    </ul>
</body>