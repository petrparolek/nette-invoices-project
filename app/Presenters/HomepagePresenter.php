<?php

declare(strict_types=1);

namespace App\Presenters;

use Contributte\PdfResponse\PdfResponse;
use DateTime;
use NAttreid\Invoices\Entities\Currency\CZK;
use NAttreid\Invoices\Entities\Invoice;
use NAttreid\Invoices\Entities\Item;
use NAttreid\Invoices\Entities\Receiver;
use NAttreid\Invoices\Entities\Supplier;
use NAttreid\Invoices\PrintInvoice;
use Nette\Application\UI\Presenter;
use Nette\Utils\ArrayHash;

final class HomepagePresenter extends Presenter
{

	/**
	 * @var PrintInvoice
	 * @inject
	 */
	public $printInvoice;

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
		$supplier->ico = '53948874';
		$supplier->dic = 'CZ53948874';
		$supplier->name = 'Firma s.r.o.';
		$supplier->street = 'U lesíka 123';
		$supplier->zip = '10200';
		$supplier->city = 'Praha 2';
		//$supplier->country = "Česká republika";
		$supplier->text = "testovvací objednávka";
		$supplier->bankAccount = '123/0100';
		//$supplier->iban = 'xxxxxxxxx';
		//$supplier->swift = 'yyy';
		$supplier->phone = '+420 123 456 789';
		$supplier->email = 'info@example.com';

		$invoice = new Invoice();
		$invoice->id = 2022090501;
		$invoice->variable = 2022090501;
		$invoice->constant = 123;
		$datetime = new DateTime();
		$invoice->dueDate = $datetime;
		$invoice->dateIssue = $datetime->modify('+14 days');
		$invoice->taxDate = $datetime;
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

		$printer->setInvoice($invoice);
		$printer->setTemplateFile(__DIR__ . "/templates/invoice.latte");
		$response = $printer->getResponse();
		$response->setSaveMode(PdfResponse::INLINE);

		$this->sendResponse($response);
	}

}
