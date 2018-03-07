<?php

/* index.html */
class __TwigTemplate_aa7fae1cf239850bf27332b3c4d0642538b1090f0153e508653f6c5d563bb399 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>
    <?php //echo \$title; ?>
    ";
        // line 3
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "
</h1>
<h3><?php //echo \$data; ?></h3>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html", "/home/luolingying/projects/imooc/app/views/index.html");
    }
}
