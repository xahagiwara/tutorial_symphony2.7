<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Toppage/index.html.twig */
class __TwigTemplate_727d0fcc2bc7c986867282aa03a782da080ffe72dfff13de6922db665a4d0236 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Toppage/index.html.twig"));

        // line 1
        echo "<html>
<head>
</head>
<body>
    <div>
        <h1>クラシックシンフォニー楽団のページへようこそ！</h1>

        <!--お知らせ部品の埋め込み-->
        ";
        // line 9
        echo twig_include($this->env, $context, "Common/infomation.html.twig");
        echo "
        <p><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_concert_index");
        echo "\">公演情報はこちら</a></p>

        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppBundle:Blog:latestList"));
        echo "

        <!--
            カッコで囲んだ場所を変数として認識
            コメント中であっても判定しているので注意
        -->

        <!--パス名はsymphonyが自動生成している
            php app/console debug:router で確認
            path(\"自動生成パス\")
        -->
    </div>
</body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Toppage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  47 => 10,  43 => 9,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
</head>
<body>
    <div>
        <h1>クラシックシンフォニー楽団のページへようこそ！</h1>

        <!--お知らせ部品の埋め込み-->
        {{ include(\"Common/infomation.html.twig\") }}
        <p><a href=\"{{ path(\"app_concert_index\") }}\">公演情報はこちら</a></p>

        {{ render(controller(\"AppBundle:Blog:latestList\")) }}

        <!--
            カッコで囲んだ場所を変数として認識
            コメント中であっても判定しているので注意
        -->

        <!--パス名はsymphonyが自動生成している
            php app/console debug:router で確認
            path(\"自動生成パス\")
        -->
    </div>
</body>
</html>", "Toppage/index.html.twig", "/Users/xearts/Desktop/Hagiwara Shion/tutorial_symphony2.7/app/Resources/views/Toppage/index.html.twig");
    }
}
