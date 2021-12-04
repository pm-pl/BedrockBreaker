<?php
declare(strict_types = 1);

namespace JavierLeon9966\BedrockBreaker\commands;

use CortexPE\Commando\args\FloatArgument;
use CortexPE\Commando\BaseCommand;

use JavierLeon9966\BedrockBreaker\Bedrock;

use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class BBResistanceCommand extends BaseCommand {
	protected function prepare(): void {
		$this->setPermission('bedrockbreaker.command.bbresistance');
		$this->registerArgument(0, new FloatArgument('blastResistance', false));
	}
	public function onRun(CommandSender $sender, string $aliasUsed, array $args): void {
		Bedrock::setBlastResistance($args['blastResistance']);
		$sender->sendMessage(TextFormat::GREEN . 'Successfully changed the bedrock blast resistance value to ' . TextFormat::YELLOW . $args['blastResistance'] . TextFormat::GREEN . '.');
	}
}