<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\kzolnierzZad1Type;
use kzolnierz\Tools\Zad1;
class kzolnierzZad1Controller extends Controller
{
    /**
     * @Route("/kzolnierz/zad1/show/form", name="kzolnierz_zad1_show_form")
     */
    public function showFormAction()
    {
        $zad1 = new Zad1();
        $form = $this->createCreateForm($zad1);
        return $this->render(
            'AppBundle:kzolnierzZad1:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/kzolnierz/zad1/przetworz", name="kzolnierz_zad1_wynik")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $zad1 = new Zad1();
        $form = $this->createCreateForm($zad1);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:kzolnierzZad1:wynik.html.twig',
                array('wynik' => $zad1->statystyka())
            );
        }
        return $this->render(
            'AppBundle:kzolnierzZad1:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Zad1 $zad1 The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Zad1 $zad1)
    {
        $form = $this->createForm(new kzolnierzZad1Type(), $zad1, array(
            'action' => $this->generateUrl('kzolnierz_zad1_wynik'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Przetwórz'));
        return $form;
    }
}