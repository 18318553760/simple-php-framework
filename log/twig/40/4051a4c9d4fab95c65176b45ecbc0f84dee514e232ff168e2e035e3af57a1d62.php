<?php

/* layout.html */
class __TwigTemplate_a11e14d83ba9f05fa717a2fb5a4ba9c4d611d057e14bf333d2b4616c9927bc7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<body>
    <header>
        超简单留言板
        <a href=\"/\">所有留言</a>
        <a href=\"/index/add\">添加留言</a>
    </header>
    <content>
        ";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </content>
    <footer>@ 2018 超简单留言板</footer>
</body>
</html>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  40 => 9,  32 => 12,  30 => 9,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<body>
    <header>
        超简单留言板
        <a href=\"/\">所有留言</a>
        <a href=\"/index/add\">添加留言</a>
    </header>
    <content>
        {% block content %}

        {% endblock %}
    </content>
    <footer>@ 2018 超简单留言板</footer>
</body>
</html>
", "layout.html", "/home/luolingying/projects/imooc/app/views/layout.html");
    }
}
