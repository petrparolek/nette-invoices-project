<?php

declare(strict_types=1);

namespace App\Presenters;

use Contributte\Application\Response\Fly\Adapter\StdoutAdapter;
use Contributte\Application\Response\Fly\Buffer\Buffer;
use Contributte\Application\Response\Fly\FlyFileResponse;
use Contributte\PdfResponse\PdfResponse;
use DateTime;
use NAttreid\Invoices\Entities\Currency\CZK;
use NAttreid\Invoices\Entities\Invoice;
use NAttreid\Invoices\Entities\Item;
use NAttreid\Invoices\Entities\Receiver;
use NAttreid\Invoices\Entities\Supplier;
use NAttreid\Invoices\PrintInvoice;
use Nette\Application\Responses\FileResponse;
use Nette\Application\UI\Presenter;
use Nette\Http\IRequest;
use Nette\Http\IResponse;
use Nette\Localization\ITranslator;
use Nette\Utils\ArrayHash;

final class HomepagePresenter extends Presenter
{

	/**
	 * @var PrintInvoice
	 * @inject
	 */
	public $printInvoice;

	/**
	 * @var ITranslator
	 * @inject
	 */
	public $translator;

	public function actionPdfTest(): void
	{
		$receiver = new Receiver();
		$receiver->name = 'Jan Novák';
		$receiver->ico = '4741514';
		$receiver->dic = 'CZ4741514';
		$receiver->street = 'Pod školou 1254/6';
		$receiver->zip = '10200';
		$receiver->city = 'Praha 2';

		$supplier = new Supplier();
		$supplier->ico = '28115708';
		$supplier->dic = 'CZ28115708';
		$supplier->name = 'WEDOS Internet, a.s.';
		$supplier->street = 'Masarykova 1230';
		$supplier->zip = '10200';
		$supplier->city = '373 41 Hluboká nad Vltavou';
		//$supplier->country = "Česká republika";
		$supplier->text = "testovvací objednávka";
		$supplier->bankAccount = '123/0100';
		//$supplier->iban = 'xxxxxxxxx';
		//$supplier->swift = 'yyy';
		$supplier->phone = '+420 123 456 789';
		$supplier->email = 'info@example.com';

		$invoice = new Invoice();
		$invoice->id = 21774114;
		$invoice->variable = 21774114;
		$invoice->constant = 123;
		$datetime = new DateTime('2022-07-01');
		$invoice->dateIssue = clone $datetime;
		$invoice->dueDate = clone $datetime;
		$invoice->taxDate = clone $datetime;
		$invoice->vat = true;
		$invoice->text = 'testovací faktura';
		$invoice->currency = new CZK();

		$invoice->receiver = $receiver;
		$invoice->supplier = $supplier;

		$items = [
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 10,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 10,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
			[
				'name' => 'test',
				'price' => 500,
				'vat' => 21,
				'amount' => 10,
			],
		];
		$items = ArrayHash::from($items);

		foreach ($items as $obj) {
			$item = new Item();
			$item->name = $obj->name;
			$item->price = $obj->price;
			$item->vat = $obj->vat;
			$item->amount = $obj->amount;
			$invoice->addItem($item);
		}

		$printer = $this->printInvoice;

		// pro zmenu jazyka
		$printer->setLang($this->getParameter('locale'));
		$printer->setTranslator($this->translator);

		$printer->setInvoice($invoice);
		$printer->setTemplateFile(__DIR__ . "/templates/invoice.latte");

		/*$response = $printer->getResponse();
		$response->getMPDF()->SetFooter('{PAGENO} / {nb}'); // footer
		$response->setSaveMode(PdfResponse::INLINE);

		$this->sendResponse($response);*/

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://browserless:3000/pdf');
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			'Cache-Control: no-cache',
			'Content-Type: application/json',
		]);

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
			'html' => $printer->getTemplate()->renderToString(),
			'options' => [
				'displayHeaderFooter' => false,
				'printBackground' => true,
				'format' => 'A4',
				'margin' => [
					'bottom' => '2.5cm',
					'left' => '2.5cm',
					'right' => '2.5cm',
					'top' => '2.5cm',
				],
			],
		]));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 600);

		$result = curl_exec($ch);

		curl_close($ch);

		$adapter = new StdoutAdapter(function (Buffer $buffer, IRequest $request, IResponse $response) use ($result): void {
			$response->setHeader('Content-Type', 'application/pdf');

			$buffer->write($result);
		});
		$response = new FlyFileResponse($adapter, 'invoice.pdf');

		$this->sendResponse($response);
	}

}
