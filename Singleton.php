<?php
declare(strict_types=1);

// namespace Woo\App\Util;
// use Woo\App\Email;

class Singleton
{
	public $Pdo = null;

	public static function GetInstance(): self
	{
		static $instance;

		if (null === $instance)
		{
			$instance = new self();
		}

		return $instance;
	}

	protected function __construct()
	{
		$this->Pdo = self::Conn();
	}

	protected function __clone()
	{
	}

	protected function __wakeup()
	{
	}

	// public function __wakeup()
	// {
	//     throw new \Exception("Cannot unserialize a singleton.");
	// }

	public static function Conn()
	{
		$conn = null;

		try
		{
			// Pdo Db connect here
			return $conn;
		}
		catch(\Exception $e)
		{
			return null;
		}

	}

	public function DoLogic()
	{
		// Do something
	}
}

/*
	// Singleton instance
	$si = Singleton::GetInstance();
	$conn = $si->Pdo;
*/
?>
